<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('product_type');
        $table->string('product_code')->unique();
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('quantity');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('products');
}
};
