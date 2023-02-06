<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'excerpt',
        'description',
        'price',
        'quantity',
        'stock_limit',
        'stock_status',
        'img_thumb',
        'img_gallery',
        'views',
        'selled_count',
        'seller_id',
        'category_id',
        'discount_id',
        'brand_id'
    ];

    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';

    public function productCategory() {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function discount() {
        return $this->belongsTo(Discount::class);
    }

    public function comments() {
        return $this->hasMany(ProductComment::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

    public function variantTypes() {
        return $this->belongsToMany(VariantType::class,'product_variant','product_id','variant_type_id');
    }

    public function variantValues() {
        return $this->belongsToMany(VariantValue::class,'product_variant','product_id','variant_value_id');
    }
}
