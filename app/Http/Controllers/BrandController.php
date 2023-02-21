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
        $thumbUrl = null;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/brands',$newName);
            $thumbUrl = 'images/brands/'.$newName;
        }

        $brand = new Brand([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'img_thumb' => $thumbUrl,
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
        $brand = Brand::findOrFail($id);
        $thumbUrl = $brand->img_thumb;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/brands',$newName);
            if(file_exists($thumbUrl)) {
                unlink($thumbUrl);
            }
            $thumbUrl = 'images/brands/'.$newName;
        }

        $brand->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'img_thumb' => $thumbUrl,
            'site_url' => $request->input('site_url')
        ]);
        $brand->save();

        return redirect()->route('brand.index')->with('success','برند با موفقیت ویرایش شد!');
    }

    public function destroy($id) {
        $brand = Brand::findOrFail($id);
        if(file_exists($brand->img_thumb)) {
            unlink($brand->img_thumb);
        }
        $brand->delete();
        return redirect()->route('brand.index')->with('success','برند با موفقیت حذف گردید!');
    }
}
