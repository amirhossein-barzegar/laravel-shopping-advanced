<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['star', 'feedback','customer_id','product_id'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
