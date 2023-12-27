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
        Schema::create('service_last_section', function (Blueprint $table) {
            $table->id();
            $table->string('service_id');
            $table->string('heading');
            $table->longText('content');
            $table->string('heading_2');
            $table->string('heading_3');
            $table->string('icon_2');
            $table->string('icon_3');
            $table->string('image_1');
            $table->string('image_2');
            $table->longText('image_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_last_section');
    }
};
