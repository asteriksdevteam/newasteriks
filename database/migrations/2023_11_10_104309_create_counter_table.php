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
        Schema::create('counter', function (Blueprint $table) {
            $table->id();
            $table->string("first_counter");
            $table->string("first_counter_name");
            $table->string("Second_counter");
            $table->string("Second_counter_name");
            $table->string("Third_counter");
            $table->string("Third_counter_name");
            $table->string("Fourth_counter");
            $table->string("Fourth_counter_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counter');
    }
};
