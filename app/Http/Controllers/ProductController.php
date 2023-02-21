<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\Discount;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('productCategory','discount','seller')->get();
        return view('admin.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $productCategories = ProductCategory::all();
        $discounts = Discount::all();
        return view('admin.product.create', compact('brands','productCategories','discounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $thumbUrl = null;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/products',$newName);
            $thumbUrl = 'images/products/'.$newName;
        }

        $galleryUrls = null;
        if ($request->hasFile('img_gallery')) {
            foreach($request->file('img_gallery') as $key=>$img) {
                $time = time();
                $ext = $img->getClientOriginalExtension();
                $newName = 'gallery_'.$time.$key.'.'.$ext;
                $img->move('images/products',$newName);
                $gallery[$key] = 'images/products/'.$newName;
            }
            $galleryUrls = implode(',',$gallery);
        }



        $product = new Product([
            'name' => $request->input('name'),
            'excerpt' => $request->input('excerpt'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity') ? $request->input('quantity') : 0 ,
            'img_thumb' => $thumbUrl,
            'img_gallery' => $galleryUrls,
            'stock_limit' => $request->input('stock_limit') ? $request->input('stock_limit') : 10 ,
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
            'discount_id' => $request->input('discount_id'),
            'stock_status' => Product::AVAILABLE_PRODUCT,
        ]);

        $user = User::find(auth()->id());
        $user->products()->save($product);

        return redirect()->route('product.index')->with('success','محصول با موفقیت ایجاد شد!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $productCategories = ProductCategory::all();
        $discounts = Discount::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product','brands','productCategories','discounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $thumbUrl = $product->img_thumb;
        if ($request->hasFile('img_thumb')) {
            $img_thumb = $request->file('img_thumb');
            $time = time();
            $ext = $img_thumb->getClientOriginalExtension();
            $newName = $time.'.'.$ext;
            $img_thumb->move('images/products',$newName);
            $thumbUrl = 'images/products/'.$newName;
            if (file_exists($product->img_thumb)) {
                unlink($product->img_thumb);
            }
        }

        $galleryUrls = $product->img_gallery;
        if ($request->hasFile('img_gallery')) {
            foreach($request->file('img_gallery') as $key=>$img) {
                $time = time();
                $ext = $img->getClientOriginalExtension();
                $newName = 'gallery_'.$time.$key.'.'.$ext;
                $img->move('images/products',$newName);
                $gallery[$key] = 'images/products/'.$newName;
            }
            $shouldRemoveImages = explode(',',$product->img_gallery);
            foreach($shouldRemoveImages as $rmImg) {
                if (file_exists($rmImg)) {
                    unlink($rmImg);
                }                
            }
            $galleryUrls = implode(',',$gallery);
        }

        $product->update([
            'name' => $request->input('name'),
            'excerpt' => $request->input('excerpt'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity') ? $request->input('quantity') : 0 ,
            'img_thumb' => $thumbUrl,
            'img_gallery' => $galleryUrls,
            'stock_limit' => $request->input('stock_limit') ? $request->input('stock_limit') : 10 ,
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),
            'discount_id' => $request->input('discount_id'),
            'stock_status' => Product::AVAILABLE_PRODUCT,
        ]);

        $user = User::find(auth()->id());
        $user->products()->save($product);

        return redirect()->route('product.index')->with('success','محصول با موفقیت ویرایش شد!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if (file_exists($product->img_thumb)) {
            unlink($product->img_thumb);
        }
        if ($product->img_gallery) {
            $img_gallery = explode(',',$product->img_gallery);
            foreach($img_gallery as $img) {
                if(file_exists($img)) {
                    unlink($img);
                }
            }
        }
        $product->delete();

        return redirect()->route('product.index')->with('success','محصول با موفقیت حذف گردید!');
    }

    public function destroyAll() {
        $products = Product::all();
        foreach($products as $product) {
            if (file_exists($product->img_thumb)) {
                unlink($product->img_thumb);
            }
            if ($product->img_gallery) {
                $img_gallery = explode(',',$product->img_gallery);
                foreach($img_gallery as $img) {
                    if(file_exists($img)) {
                        unlink($img);
                    }
                }
            }
            $product->delete();
        }
        return redirect()->route('product.index')->with('success','تمام محصولات با موفقیت حذف گردید!');
    }
}
