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
            $table->foreignId('work_id')->nullable();
            $table->string('name');
            $table->unsignedInteger('price');
            $table->boolean('is_selling');
            $table->boolean('available');
            $table->string('image1')->nullable()->constrained();
            $table->string('image2')->nullable()->constrained();
            $table->string('image3')->nullable()->constrained();
            $table->string('image4')->nullable()->constrained();
            $table->string('image5')->nullable()->constrained();
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
