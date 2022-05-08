<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        if (MainCategory::exists()) {

            $subData = SubCategory::all();
            $data = MainCategory::all();
            return view('admin.category', ['mainCategorys' => $data, 'subCategorys' => $subData]);
        }
        return view('admin.category');
    }
    public function mainCategory_index()
    {
        return view('admin.mainCategory');
    }
    public function mainCategory_show(mainCategory $mainCategory)
    {

        return view('admin.mainCategory', ['mainCategorys' => $mainCategory]);
    }
    public function mainCategory_store(Request $request)
    {
        $filedData = $request->validate([
            'name_en' => 'required',
            'description_en' => 'required',
            'name_ar' => 'required',
            'description_ar' => 'required',
            'file_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('file_img')) {
            $filedData['file_img'] = $request->file('file_img')->store('uploads', 'public');
        }
        $category = MainCategory::create($filedData);
        return redirect()->route('category');
    }
    public function mainCategory_update(Request $request, mainCategory $mainCategory)
    {

        $filedData = $request->validate([
            'name_en' => 'required',
            'description_en' => 'required',
            'name_ar' => 'required',
            'description_ar' => 'required',
            'file_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('file_img')) {
            $filedData['file_img'] = $request->file('file_img')->store('uploads', 'public');
        }
        MainCategory::whereIn('id', $request)->update($filedData);
        return redirect()->route('category');
    }
    public function subCategory_index()
    {
        $data = MainCategory::all();
        return view('admin.subCategory', ['mainCategorys' => $data]);
    }
    public function subCategory_store(Request $request)
    {

        $filedData = $request->validate([
            'name_en' => 'required',
            'description_en' => 'required',
            'name_ar' => 'required',
            'description_ar' => 'required',
            'file_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('file_img')) {
            $filedData['file_img'] = $request->file('file_img')->store('uploads', 'public');
        }
        $filedData['main_categories_id'] = $request->main_categories_id;
        $subcategory = SubCategory::create($filedData);
        return redirect()->route('category');
    }
}
