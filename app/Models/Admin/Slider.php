<?php

namespace App\Models\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;


    protected $guarded = [];
    protected static $slider;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveData($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/slider-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$slider = new Slider();
        self::$slider->title       = $request->title;
        self::$slider->category_id = $request->category_id;
        self::$slider->image       = self::$imageUrl;
        self::$slider->status      = $request->status;
        self::$slider->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function updateData($request,$id)
    {
        self::$slider = Slider::find($id);
        self::$image = $request->file('image');
        if(self::$image)
        {
            if(file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/images/slider-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        }  else {
            self::$imageUrl = self::$slider->image;
        }

        self::$slider->title       = $request->title;
        self::$slider->category_id = $request->category_id;
        self::$slider->image       = self::$imageUrl;
        self::$slider->status      = $request->status;
        self::$slider->save();
    }
}
