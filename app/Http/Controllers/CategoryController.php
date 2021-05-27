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

}
