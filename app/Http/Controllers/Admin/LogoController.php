<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    protected $logo;
    public function addLogo()
    {
        return view('admin.logo.add');
    }

    public function newLogo(Request $request)
    {
        Logo::saveData($request);
        return redirect()->back()->with('message', 'Logo Added Successfully');
    }

    public function manageLogo()
    {
        return view('admin.logo.manage', [
            'logos' => Logo::latest()->get(),
        ]);
    }
//
    public function editLogo($id)
    {
        return view('admin.logo.edit', [
            'logo' => Logo::find($id),
        ]);
    }
//
    public function updateLogo(Request $request,$id)
    {
        Logo::updateData($request,$id);
        return redirect()->back()->with('message', 'Logo Updated Successfully');
    }
//
    public function changeStatusLogo($id)
    {
        $this->logo = Logo::find($id);
        $this->logo->status = $this->logo->status == 1 ? 0 : 1;
        $this->logo->save();
        return redirect()->back()->with('message', 'Status changed successfully');
    }

    public function deleteLogo($id)
    {
        $this->logo = Logo::find($id);
        if (file_exists($this->logo->image))
        {
            unlink($this->logo->image);
        }
        $this->logo->delete();
        return redirect()->back()->with('message', 'Logo deleted successfully');
    }

}
