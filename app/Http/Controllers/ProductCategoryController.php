<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryRequest;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index() {
        $productCategories = ProductCategory::all();
        return view('admin.product-category.list',compact('productCategories'));
    }

    public function create() {
        $productCategories = ProductCategory::all();
        return view('admin.product-category.create',compact('productCategories'));
    }

    public function store(ProductCategoryRequest $request) {
        $thumbUrl = null;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/product-categories',$newName);
            $thumbUrl = 'images/product-categories/'.$newName;
        }

        $productCategory = new ProductCategory([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
            'img_thumb' => $thumbUrl
        ]);

        $productCategory->save();

        return redirect()->route('product-category.index')->with('success', 'دسته بندی پست با موفقیت ایجاد شد!');
    }

    public function show($id) {

    }

    public function edit($id) {
        $productCategory = ProductCategory::findOrFail($id);
        $productCategories = ProductCategory::all();
        return view('admin.product-category.edit',compact('productCategories', 'productCategory'));
    }

    public function update(ProductCategoryRequest $request, $id) {
        $productCategory = ProductCategory::findOrFail($id);
        $thumbUrl = $productCategory->img_thumb;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/product-categories',$newName);
            $thumbUrl = 'images/product-categories/'.$newName;
            if (file_exists($productCategory->img_thumb)) {
                unlink($productCategory->img_thumb);
            }
        }
        $productCategory->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'parent_id' => $request->input('parent_id'),
            'img_thumb' => $thumbUrl
        ]);

        return redirect()->route('product-category.index')->with('success','دسته بندی با موفقیت ویرایش گردید!');
    }

    public function destroy($id) {
        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->delete();
        return redirect()->route('product-category.index')->with('success', 'دسته بندی پست با موفقیت حذف گردید!');
    }
}
