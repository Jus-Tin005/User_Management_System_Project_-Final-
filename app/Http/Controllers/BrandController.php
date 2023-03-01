<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
    public function AllBrand(){
        $brands = Brand::latest()->paginate(5);
        return view('brand.index',compact('brands'));
    }

    public function AddBrand(Request $request){
        $validated = $request->validate([
            'brand_name' => 'required|unique:brands|min:5',
            'brand_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ],
        [
            'brand_name.required' => 'Please fill out this brand field !',
            'brand_name.min' => 'Brand name must be longer than 5 Chars !',
        ]);

        $brand_image = $request->file('brand_image');
        $name_generate = hexdec(uniqid()) . '.' . $brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300,300)->save('image/brand/' . $name_generate);


        $last_image = 'image/brand/' .   $name_generate;

        $brand = new Brand;
        $brand->brand_name = $request->brand_name;
        $brand->brand = $request->brand;
        $brand->brand_image = $last_image;
        $brand->save();
        return Redirect()->back()->with('success','Brand Added Successfully !');
    }


    public function Edit($id){
        $brands = Brand::find($id);
        return view('brand.edit',compact('brands'));
    }

    public function Update(Request $request,$id){
        $validated = $request->validate([
            'brand_name' => 'required|unique:brands|min:5',
            'brand_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ],
        [
            'brand_name.required' => 'Please fill out this brand field !',
            'brand_name.min' => 'Brand name must be longer than 5 Chars !',
        ]);



        $old_image = $request->old_image;
        $brand_image = $request->file('brand_image');
        if($brand_image){
            $name_generate = hexdec(uniqid()) . '.' . $brand_image->getClientOriginalExtension();
            Image::make($brand_image)->resize(300,300)->save('image/brand/' . $name_generate);
            $last_image = 'image/brand/' .   $name_generate;

            unlink($old_image);
            $update = Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand' => $request->brand,
                'brand_image' => $last_image,
            ]);
            return Redirect()->route('all.brand')->with('success','Brand Updated Successfully !');
    }else{
            $update = Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand' => $request->brand,
                'brand_image' => $last_image,
            ]);
            return Redirect()->route('all.brand')->with('success','Brand Updated Successfully !');
    }

    }

    public function Delete($id){
        $image = Brand::find($id);
        $old_image =  $image->brand_image;
        unlink($old_image);

        Brand::find($id)->delete();
        return Redirect()->route('all.brand')->with('success','Brand Deleted Successfully !');
    }
}
