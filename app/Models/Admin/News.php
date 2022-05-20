<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static $news;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveData($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/news-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$news = new News();
        self::$news->title       = $request->title;
        self::$news->category_id = $request->category_id;
        self::$news->image       = self::$imageUrl;
        self::$news->content     = $request->content;
        self::$news->status      = $request->status;
        self::$news->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);  //ORM table relationship
//        return $this->belongsTo(Category::class, 'category_id');

    }

    public static function updateData($request,$id)
    {
        self::$news = News::find($id);
        self::$image = $request->file('image');
        if(self::$image)
        {
            if(file_exists(self::$news->image))
            {
                unlink(self::$news->image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/images/news-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        }  else {
            self::$imageUrl = self::$news->image;
        }

        self::$news->title       = $request->title;
        self::$news->category_id = $request->category_id;
        self::$news->image       = self::$imageUrl;
        self::$news->content     = $request->content;
        self::$news->status      = $request->status;
        self::$news->save();
    }
}
