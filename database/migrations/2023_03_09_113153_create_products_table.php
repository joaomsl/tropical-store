<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('slug', 40);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('price_cents');
            $table->unsignedTinyInteger('discount')->nullable();
            $table->string('image_path');
            $table->unsignedBigInteger('sales_amount')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
