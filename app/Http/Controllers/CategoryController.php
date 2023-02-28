<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;


class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->paginate(5);
        $trashCategory = Category::onlyTrashed()->latest()->paginate(3);
        return view('category.index',compact('categories','trashCategory'));
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


    public function Edit($id){
        $categories = Category::find($id);
        return view('category.edit',compact('categories'));
    }

    public function Update(Request $request,$id){
        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id' =>  Auth::user()->id,
        ]);
        return redirect()->route('all.category')->with('success', 'Category Updated Successfully !');
    }

    public function SoftDelete($id){
        $delete = Category::find($id)->delete();
        return redirect()->back()->with('success', 'Category Deleted Successfully !');
    }

    public function Restore($id){
        $delete = Category::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success', 'Category restored Successfully !');
    }

    public function PerDelete($id){
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success', 'Category Deleted Permanently !');
    }
}
