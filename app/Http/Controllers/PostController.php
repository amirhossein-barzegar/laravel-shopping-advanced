<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('author','category')->get();
        return view('admin.post.list', compact('posts'));
    }

    public function create() {
        $postCategories = Category::all();
        return view('admin.post.create',compact('postCategories'));
    }

    public function store(PostRequest $request) {
        $thumbUrl = null;
        if($request->hasFile('img_thumb')) {
            $img = $request->file('img_thumb');
            $time = time();
            $ext = $img->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img->move('images/posts', $newName);
            $thumbUrl = 'images/posts/'.$newName;
        }

        $post = new Post([
            'title' => $request->input('title'),
            'excerpt' => $request->input('excerpt'),
            'description' => $request->input('description'),
            'img_thumb' => $thumbUrl,
            'slug' => $request->input('slug'),
            'category_id' => $request->input('category_id'),
        ]);

        $user = User::find(auth()->id());

        $user->posts()->save($post);

        return redirect()->route('post.index')->with('success','پست با موفقیت ایجاد شد!');
    }

    public function show($id) {

    }

    public function edit($id) {
        $postCategories = Category::all();
        $post = Post::find($id);
        return view('admin.post.edit',compact('postCategories','post'));
    }

    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        $thumbUrl = $post->img_thumb;
        if($request->hasFile('img_thumb')) {
            $img = $request->file('img_thumb');
            $time = time();
            $ext = $img->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img->move('images/posts', $newName);
            if (file_exists($thumbUrl)) {
                unlink($thumbUrl);
            }
            $thumbUrl = 'images/posts/'.$newName;
        }

        $post->update([
            'title' => $request->input('title'),
            'excerpt' => $request->input('excerpt'),
            'description' => $request->input('description'),
            'img_thumb' => $thumbUrl,
            'slug' => $request->input('slug'),
            'category_id' => $request->input('category_id'),
        ]);

        $user = User::find(auth()->id());

        $user->posts()->save($post);

        return redirect()->route('post.index')->with('success','پست با موفقیت ویرایش شد!');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index')->with('success','پست با موفقیت حذف شد!');
    }
}
