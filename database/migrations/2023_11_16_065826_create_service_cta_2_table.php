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
        Schema::create('service_cta_2', function (Blueprint $table) {
            $table->id();
            $table->string("service_id");
            $table->string("service_cta_heading_1");
            $table->string("service_cta_heading_2");
            $table->string("service_cta_percentage_1");
            $table->string("service_cta_percentage_2");
            $table->longText("service_cta_content_1");
            $table->longText("service_cta_content_2");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_cta_2');
    }
};
