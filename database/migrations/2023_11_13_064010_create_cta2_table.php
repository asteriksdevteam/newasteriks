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
        Schema::create('cta2', function (Blueprint $table) {
            $table->id();
            $table->string('first_heading');
            $table->string('second_heading');
            $table->string('first_persentage');
            $table->string('second_persentage');
            $table->string('first_content');
            $table->string('second_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cta2');
    }
};
