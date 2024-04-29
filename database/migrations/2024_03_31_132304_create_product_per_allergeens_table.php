<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_per_allergeens', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->references('id')->on('products');
            $table->integer('allergeen_id')->references('id')->on('allergeens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_allergeens');
    }
};
