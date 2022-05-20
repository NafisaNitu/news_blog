<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Admin\News;

class NewsController extends Controller
{
    protected $news;
    public function addNews()
    {
        return view('admin.news.add',[
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    public function newNews(Request $request)
    {
        News::saveData($request);
        return redirect()->back()->with('message', 'News Content Added Successfully');
    }

    public function manageNews()
    {
        return view('admin.news.manage', [
//            'newses' => News::latest()->get(),
            'newses' => News::latest()->simplePaginate(4),
//            'newses' => News::paginate(4),
        ]);
    }

    public function changeStatusNews($id)
    {
        $this->news = News::find($id);
        $this->news->status = $this->news->status == 1 ? 0 : 1;
        $this->news->save();

        return redirect()->back()->with('message', 'Status changed successfully');
    }

    public function editNews($id)
    {
        return view('admin.news.edit', [
            'news' => News::find($id),
            'categories' => Category::where('status', 1)->get(),
            ]);
    }

    public function updateNews(Request $request,$id)
    {
        News::updateData($request,$id);
        return redirect()->back()->with('message', 'News Updated Successfully');
    }

    public function deleteNews($id)
    {
        $this->news = News::find($id);
        if (file_exists($this->news->image))
        {
            unlink($this->news->image);
        }
        $this->news->delete();
        return redirect()->back()->with('message', 'News deleted successfully');
    }
}
