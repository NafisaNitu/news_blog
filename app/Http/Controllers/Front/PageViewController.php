<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Logo;
use App\Models\Admin\News;
use App\Models\Admin\Slider;
use App\Models\Category;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    protected $category;
    protected $news;
    public function index()
    {
        return view('front.home.home', [
            'categories' => Category::where('status', 1)->latest()->get(),
            'sliders' => Slider::where('status', 1)->latest()->get(),
            'cat' => Category::where('status', 1)->take(4)->latest()->get(),
            'category' => Category::where('status', 1)->take(3)->skip(2)->latest()->get(),
            'cats' => Category::where('status', 1)->take(3)->skip(3)->latest()->get(),
            'newses' => News::where('status', 1)->take(2)->skip(1)->latest()->get(),
            'news' => News::where('status', 1)->latest()->paginate(4),
            'new' => News::where('category_id', 4)->take(1)->latest()->get(),
            'newpoli' => News::where('category_id', 4)->latest()->get(),
            'logo' => Logo::where('id', 1)->first(),
            ]);
    }

    public function pageDetails($id)
    {
        return view('front.home.details', [
            'categories' => Category::where('status', 1)->latest()->get(),
            'logo' => Logo::where('id', 1)->first(),
            'cats' => Category::where('status', 1)->take(3)->latest()->get(),
            'news' => News::find($id),
        ]);
    }

    public function catDetails($id)
    {
        return view('front.home.cat-details', [
            'categories' => Category::where('status', 1)->latest()->get(),
            'logo' => Logo::where('id', 1)->first(),
            'cats' => Category::where('status', 1)->take(3)->latest()->get(),
            'category' => Category::find($id),
        ]);
    }

    public function pageCategory($id)
    {
        if (Category::where('id', $id)->exists())
        {
            $category = Category::where('id', $id)->first();
            $news = News::where('category_id', $category->id)->where('status', 1)->paginate(3);
        }

        $categories = Category::where('status', 1)->latest()->get();
        $logo = Logo::where('id', 1)->first();
        $cats = Category::where('status', 1)->take(3)->latest()->get();
        return view('front.home.category', compact('category','news','categories','logo','cats'));

    }

    public function sliderDetails($id)
    {
        return view('front.home.slider-details', [
            'categories' => Category::where('status', 1)->latest()->get(),
            'logo' => Logo::where('id', 1)->first(),
            'cats' => Category::where('status', 1)->take(3)->latest()->get(),
            'slider' => Slider::find($id),
        ]);
    }

    public function search(Request $request)
    {
        $categories = Category::where('status', 1)->latest()->get();
        $category = Category::all();
        $news = News::orderBy('id', 'desc')->where('title', 'LIKE', '%'.$request->news.'%');
        if($request->category != "ALL") $news->where('category_id', $request->category);
        $news = $news->get();

        $logo = Logo::where('id', 1)->first();
        $cats = Category::where('status', 1)->take(3)->latest()->get();
        $category = Category::where('status', 1)->latest()->get();
        return view('front.home.search', compact('news','categories', 'logo','cats', 'category'));
    }

    public function specialNews()
    {
        return view('front.home.special-news', [
            'categories' => Category::where('status', 1)->latest()->get(),
            'new' => News::where('category_id', 6)->take(1)->latest()->get(),
            'newpoli' => News::where('category_id', 6)->latest()->get(),
            'logo' => Logo::where('id', 1)->first(),
            'news' => News::where('status', 1)->latest()->paginate(4),
        ]);
    }

    public function recentNews()
    {
        return view('front.home.recent-news', [
            'categories' => Category::where('status', 1)->latest()->get(),
            'news' => News::where('status', 1)->paginate(3),
            'new' => News::where('category_id', 6)->take(1)->latest()->get(),
            'newpoli' => News::where('category_id', 6)->latest()->get(),
            'logo' => Logo::where('id', 1)->first(),
        ]);
    }
}
