<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::all();
        return view('admin.brand.list',compact('brands'));
    }

    public function create() {
        return view('admin.brand.create');
    }

    public function store(BrandRequest $request) {
        $brand = new Brand([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'site_url' => $request->input('site_url')
        ]);

        $brand->save();

        return redirect()->route('brand.index')->with('success','برند با موفقیت ایجاد شد!');
    }

    public function show($id) {

    }

    public function edit($id) {
        $brand = Brand::findOrFail($id);
        return view('admin.brand.edit',compact('brand'));
    }

    public function update(BrandRequest $request,$id) {
        Brand::findOrFail($id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'site_url' => $request->input('site_url')
        ]);

        return redirect()->route('brand.index')->with('success','برند با موفقیت ویرایش شد!');
    }

    public function destroy($id) {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brand.index')->with('success','برند با موفقیت حذف گردید!');
    }
}
