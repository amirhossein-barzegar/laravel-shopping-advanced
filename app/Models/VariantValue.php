<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantValue extends Model
{
    use HasFactory;

    protected $fillable = ['value','price','quantity','variant_type_id'];

    public function products() {
        return $this->belongsToMany(Product::class,'product_variant','variant_value_id','product_id');
    }

    public function variantType() {
        return $this->belongsTo(VariantType::class);
    }
}
