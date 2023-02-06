<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'reply_id',
        'user_id',
        'product_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
