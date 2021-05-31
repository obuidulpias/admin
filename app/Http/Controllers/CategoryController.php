<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        
        $categories = Category::orderBy('id', 'desc')->get();
        //return $categories;
        return view('category.category', ['categories' =>$categories ]);
    }
    

    private function validateCategory($request) {
        $request->validate([
            'name' => 'required|unique:categories|max:255|regex:/^[a-zA-Z\s]*$/',
            // 'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);
    }
    public function create(Request $request)
    {
        $this->validateCategory($request);
        $imageUrl = '';
        if($image = $request->file('image'))
        {
            $imageUrl = Category::imgUpload($image);
        }
        Category::newCategory($request, $imageUrl);
        return redirect()->back()->with('message', 'Category info save successfully');
    }
    public function changeCategoryStatus($id) {
        //return json_encode($id);
        $category = Category::find($id);
        if($category->status==1)
        {
            $category->status = 0;
            $message = 'Category Info Unpublished Successfully';
        }
        else {
            $category->status = 1;
            $message = 'Category Info Published Successfully';
        }
        $category-> save();
        return json_encode([
            'message'   => $message,
            'status'    => $category->status,
            'id'        => $category->id
        ]);
    }
    public function getCategoryInfoById($id) {
        $category = Category::find($id);
        return json_encode($category);
    }
    public function updateCategoryInfo(Request $request)
    {
        $category   = Category::find($request->id);
        $image      = $request->file('image');
        if($image)
        {
            $type   = $image->getClientOriginalExtension();
            $size   = $image->getSize();
            if($type == 'jpg' || $type == 'png')
            {
                if($size > 3145728) // 3145728 = 3mb
                {
                    return response()->json([
                        'success'   => false,
                        'message'   => 'File size is too large'
                    ]);
                }
                else
                {
                    if(file_exists($category->image))
                    {
                        unlink($category->image);
                    }
                    $igmName = time().".".$type;
                    $directory = 'category-images/';
                    $image->move($directory, $igmName);
                    $imgURL = $directory.$igmName;
                    $category->image = $imgURL;
                }
            }
            else
            {
                return response()->json([
                    'success'   => false,
                    'message'   => 'File type is not supported. use only jpg or png'
                ]);
            }
        }

        $category->name = $request->name;
        $category->save();

        return response()->json([
            'success'   => true,
            'message'   => 'Category info update successfully',
            'name'      => $category->name,
            'image'     => $category->image,
            'id'        => $category->id
        ]);
    }
    public function deleteCategoryInfo(Request $request) {
        $category = Category::find($request->id);
        if(file_exists($category->image))
        {
            unlink($category->image);
        }
        $category->delete();
        return json_encode([
            'message' => 'Category info delete successfully',
            'categories' => Category::orderBy('id', 'desc')->get()
        ]);
    }

}
