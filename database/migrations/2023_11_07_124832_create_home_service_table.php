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
        Schema::create('home_service', function (Blueprint $table) {
            $table->id();
            $table->string("heading1");
            $table->string("heading2");
            $table->string("heading3");
            $table->string("heading4");
            $table->longText("content1");
            $table->longText("content2");
            $table->longText("content3");
            $table->longText("content4");
            $table->string("image1");
            $table->string("image2");
            $table->string("image3");
            $table->string("image4");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_service');
    }
};
