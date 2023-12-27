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
        Schema::create('who_we_are', function (Blueprint $table) {
            $table->id();
            $table->string('who_we_are');
            $table->longText('who_we_are_content');
            $table->string('section_image');
            $table->string('heading_1');
            $table->longText('content_1');
            $table->string('icon_image_1');
            $table->string('heading_2');
            $table->longText('content_2');
            $table->string('icon_image_2');
            $table->string('heading_3');
            $table->longText('content_3');
            $table->string('icon_image_3');
            $table->string('heading_4');
            $table->longText('content_4');
            $table->string('icon_image_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('who_we_are');
    }
};
