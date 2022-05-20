<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static $logo;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveData($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/logo-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$logo = new Logo();
        self::$logo->title       = $request->title;
        self::$logo->image       = self::$imageUrl;
        self::$logo->status      = $request->status;
        self::$logo->save();
    }


    public static function updateData($request,$id)
    {
        self::$logo = Logo::find($id);
        self::$image = $request->file('image');
        if(self::$image)
        {
            if(file_exists(self::$logo->image))
            {
                unlink(self::$logo->image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/images/logo-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        }  else {
            self::$imageUrl = self::$logo->image;
        }

        self::$logo->title       = $request->title;
        self::$logo->image       = self::$imageUrl;
        self::$logo->status      = $request->status;
        self::$logo->save();
    }
}

