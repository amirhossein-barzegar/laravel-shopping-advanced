<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index() {
        $postCategories = Category::all();
        return view('admin.post-category.list',compact('postCategories'));
    }

    public function create() {
        $postCategories = Category::all();
        return view('admin.post-category.create',compact('postCategories'));
    }

    public function store(CategoryRequest $request) {
        $thumbUrl = null;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/post-categories',$newName);
            $thumbUrl = 'images/post-categories/'.$newName;
        }

        $postCategories = new Category([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
            'img_thumb' => $thumbUrl
        ]);

        $postCategories->save();

        return redirect()->route('post-category.index')->with('success', 'دسته بندی محصول با موفقیت ایجاد شد!');
    }

    public function show($id) {

    }

    public function edit($id) {
        $postCategory = Category::findOrFail($id);
        $postCategories = Category::all();
        return view('admin.post-category.edit',compact('postCategories', 'postCategory'));
    }

    public function update(CategoryRequest $request, $id) {
        $postCategories = Category::findOrFail($id);
        $thumbUrl = $postCategories->img_thumb;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/post-categories',$newName);
            $thumbUrl = 'images/post-categories/'.$newName;
            if (file_exists($postCategories->img_thumb)) {
                unlink($postCategories->img_thumb);
            }
        }
        $postCategories->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'parent_id' => $request->input('parent_id'),
            'img_thumb' => $thumbUrl
        ]);

        return redirect()->route('post-category.index')->with('success','دسته بندی با موفقیت ویرایش گردید!');
    }

    public function destroy($id) {
        $postCategory = Category::findOrFail($id);
        $postCategory->delete();
        return redirect()->route('post-category.index')->with('success', 'دسته بندی محصول با موفقیت حذف گردید!');
    }
}
