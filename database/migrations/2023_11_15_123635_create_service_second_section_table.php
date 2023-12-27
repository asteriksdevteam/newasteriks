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
        Schema::create('service_second_section', function (Blueprint $table) {
            $table->id();
            $table->string("service_id");
            $table->string("service_second_section_heading");
            $table->longText("service_second_section_short_description");
            $table->longText("service_second_section_long_description");
            $table->string("service_second_section_heading_first");
            $table->longText("service_second_section_description_first");
            $table->string("service_second_section_heading_second");
            $table->longText("service_second_section_description_second");
            $table->string("service_second_section_heading_third");
            $table->longText("service_second_section_description_third");
            $table->string("sevice_second_Image");
            $table->string("sevice_second_Image_first");
            $table->string("sevice_second_Image_second");
            $table->string("sevice_second_Image_third");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_second_section');
    }
};
