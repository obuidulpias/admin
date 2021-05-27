<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    //use SoftDeletes;

    public static function imgUpload($image)
    {
        $type = $image->getClientOriginalExtension();
        $size = $image->getSize();
        if($type == 'jpg' || $type == 'png')
        {
            if($size > 3145728) // 3145728 = 3mb
            {
                return redirect()->back()->with('message', 'File size is too large');
            }
            else
            {
                $igmName = time().".".$type;
                $directory = 'category-images/';
                $image->move($directory, $igmName);
                return $directory.$igmName;
            }
        }
        else
        {
            return redirect()->back()->with('message', 'File type is not supported. use only jpg or png');
        }
    }

    public static function newCategory($request, $imageUrl)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->image = $imageUrl;
        $category->save();
    }
}
