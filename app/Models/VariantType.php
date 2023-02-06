<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function products() {
        return $this->belongsToMany(Product::class,'product_variant','variant_type_id','product_id');
    }

    public function variantValues() {
        return $this->hasMany(VariantValue::class);
    }
}
