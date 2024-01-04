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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('product_id');
            $table->string('images');
            $table->string('introduce');
            $table->string('description');
            $table->string('price');
            $table->string('salient_features');
            $table->string('connect');
            $table->string('access_mode');
            $table->string('support_system');
            $table->string('power');
            $table->string('lowbattery_warning');
            $table->string('security');
            $table->string('img_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
