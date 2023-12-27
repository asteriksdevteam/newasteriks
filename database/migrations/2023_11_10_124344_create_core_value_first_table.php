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
        Schema::create('core_value_first', function (Blueprint $table) {
            $table->id();
            $table->string("heading_1");
            $table->string("heading_2");
            $table->string("heading_3");
            $table->string("heading_4");
            $table->string("heading_5");
            $table->string("heading_6");
            $table->longText("content_1");
            $table->longText("content_2");
            $table->longText("content_3");
            $table->longText("content_4");
            $table->longText("content_5");
            $table->longText("content_6");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_value_first');
    }
};
