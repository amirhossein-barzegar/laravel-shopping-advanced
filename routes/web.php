<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * Starting The RelationShips!
 */
use App\Models\City;
use App\Models\State;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Discount;
use App\Models\ProductComment;
use App\Models\Rating;
use App\Models\VariantType;
use App\Models\VariantValue;

// City and State
Route::get('city/{id}/stats', function($id) {
    $city = City::find($id);
    return $city->stats;
});
Route::get('state/{id}/city', function($id) {
    $state = State::find($id);
    return $state->city;
});

// User and City
Route::get('user/{id}/city', function($id) {
    $user = User::find($id);
    return $user->city;
});
Route::get('city/{id}/users', function($id) {
    $city = City::find($id);
    return $city->users;
});

// User and State
Route::get('user/{id}/state', function($id) {
    $user = User::find($id);
    return $user->state;
});
Route::get('state/{id}/users', function($id) {
    $state = State::find($id);
    return $state->users;
});

// User and Role
Route::get('user/{id}/roles', function($id) {
    $user = User::find($id);
    return $user->roles;
});
Route::get('role/{id}/users', function($id) {
    $role = Role::find($id);
    return $role->users;
});

// Post and Author
Route::get('author/{id}/posts', function($id) {
    $user = User::find($id);
    return $user->posts;
});
Route::get('post/{id}/author', function($id) {
    $post = Post::find($id);
    return $post->author;
});

// Post and Category
Route::get('post/{id}/category', function($id) {
    $post = Post::find($id);
    return $post->category;
});
Route::get('category/{id}/posts', function($id) {
    $category = Category::find($id);
    return $category->posts;
});

// Comment and User 
Route::get('comment/{id}/user', function($id) {
    $comment = Comment::find($id);
    return $comment->user;
});
Route::get('user/{id}/comments', function($id) {
    $user = User::find($id);
    return $user->comments;
});

// Comment and Post
Route::get('comment/{id}/post', function($id) {
    $comment = Comment::find($id);
    return $comment->post;
});
Route::get('post/{id}/comments', function($id) {
    $post = Post::find($id);
    return $post->comments;
});

/*****************************************
 * Products
 */

// ProductCategory and Product
Route::get('product-category/{id}/products', function($id) {
    $productCategory = ProductCategory::find($id);
    return $productCategory->products;
});
Route::get('product/{id}/product-category', function($id) {
    $product = Product::find($id);
    return $product->productCategory;
});

// Brand and Product
Route::get('brand/{id}/products', function($id) {
    $brand = Brand::find($id);
    return $brand->products;
});
Route::get('product/{id}/brand', function($id) {
    $product = Product::find($id);
    return $product->brand;
});

// Product and Discount
Route::get('product/{id}/discount', function($id) {
    $product = Product::find($id);
    return $product->discount;
});
Route::get('discount/{id}/products', function($id) {
    $discount = Discount::find($id);
    return $discount->products;
});

// Product and Comment
Route::get('product/{id}/comments', function($id) {
    $product = Product::find($id);
    return $product->comments;
});
Route::get('comment/{id}/product', function($id) {
    $comment = ProductComment::find($id);
    return $comment->product;
});

// Product and Rating
Route::get('product/{id}/ratings', function($id) {
    $product = Product::find($id);
    return $product->ratings;
});
Route::get('rating/{id}/product', function($id) {
    $rating = Rating::find($id);
    return $rating->product;
});

// Product and VariantType
Route::get('product/{id}/variant-types', function($id) {
    $product = Product::find($id);
    return $product->variantTypes;
});
Route::get('variant-type/{id}/products', function($id) {
    $variantType = VariantType::find($id);
    return $variantType->products;
});

// Product and VariantValue
Route::get('product/{id}/variant-values', function($id) {
    $product = Product::find($id);
    return $product->variantValues;
});
Route::get('variant-value/{id}/products', function($id) {
    $variantValue = VariantValue::find($id);
    return $variantValue->products;
});

// VariantType and VariantValue
Route::get('variant-type/{id}/variant-values', function($id) {
    $variantType = VariantType::find($id);
    return $variantType->variantValues;
});
Route::get('variant-value/{id}/variant-type', function($id) {
    $variantValue = VariantValue::find($id);
    return $variantValue->variantType;
});


/******************************************
 * Livewire routes
 */
use App\Http\Livewire\Shop\ProductComponent;
Route::get('/shop/{id}', ProductComponent::class)->name('shop.product');









