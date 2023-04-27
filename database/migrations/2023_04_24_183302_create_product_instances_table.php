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
        Schema::create('product_instances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_variant_id');
            $table->unsignedBigInteger('purchase_order_item_id');
            $table->string('identifier')->nullable();
            $table->timestamps();

            $table->foreign('product_variant_id')->references('id')->on('product_variants');
            $table->foreign('purchase_order_item_id')->references('id')->on('purchase_order_items');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_instances');
    }
};
