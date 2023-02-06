<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyText('excerpt')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('price');
            $table->integer('quantity')->default(0);
            $table->tinyInteger('stock_limit')->default(10);
            $table->enum('stock_status',[Product::AVAILABLE_PRODUCT,Product::UNAVAILABLE_PRODUCT])->default(Product::UNAVAILABLE_PRODUCT);
            $table->text('img_thumb')->nullable();
            $table->text('img_gallery')->nullable();
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedInteger('selled_count')->default(0);
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_id')->nullable()->constrained('product_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('discount_id')->nullable()->constrained('discounts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
