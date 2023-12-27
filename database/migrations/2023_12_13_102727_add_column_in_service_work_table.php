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
        Schema::table('service_work', function (Blueprint $table) {
            $table->string("first_background_color")->after("first_work_image");
            $table->string("second_background_color")->after("second_work_image");
            $table->string("third_background_color")->after("third_work_image");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_work', function (Blueprint $table) {
            //
        });
    }
};
