<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Admin\Slider;

class SliderController extends Controller
{
    protected $slider;
    public function addSlider()
    {
        return view('admin.slider.add',[
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    public function newSlider(Request $request)
    {
        Slider::saveData($request);
        return redirect()->back()->with('message', 'Slider Added Successfully');
    }

    public function manageSlider()
    {
        return view('admin.slider.manage', [
            'sliders' => Slider::latest()->get(),
        ]);
    }

    public function editSlider($id)
    {
        return view('admin.slider.edit', [
            'slider' => Slider::find($id),
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    public function updateSlider(Request $request,$id)
    {
        Slider::updateData($request,$id);
        return redirect()->back()->with('message', 'Slider Updated Successfully');
    }

    public function changeStatusSlider($id)
    {
        $this->slider = Slider::find($id);
        $this->slider->status = $this->slider->status == 1 ? 0 : 1;
        $this->slider->save();
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    public function deleteSlider($id)
    {
        $this->slider = Slider::find($id);
        if (file_exists($this->slider->image))
        {
            unlink($this->slider->image);
        }
        $this->slider->delete();
        return redirect()->back()->with('message', 'Slider deleted successfully');
    }

}
