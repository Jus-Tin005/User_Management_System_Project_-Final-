<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;


class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('category.index',compact('categories'));
    }

    public function AddCategory(Request $request){
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ],
        [
            'category_name.required' => 'Please fill out this category field !',
            'category_name.max' => 'Please enter greater than 255 Chars !',
        ]);


        $category = new Category;
        $category->category_name = $request->category_name;
        $category->user_id =  Auth::user()->id;
        $category->save();
        return redirect()->back()->with('success', 'Category Inserted Successfully !');

    }
}
