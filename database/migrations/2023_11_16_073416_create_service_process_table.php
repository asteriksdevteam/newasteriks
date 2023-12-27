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
        Schema::create('service_process', function (Blueprint $table) {
            $table->id();
            $table->string("service_id");
            $table->string("process_heading_one");
            $table->longText("process_content_one");
            $table->string("process_heading_two");
            $table->longText("process_content_two");
            $table->string("process_heading_three");
            $table->longText("process_content_three");
            $table->string("process_heading_four");
            $table->longText("process_content_four");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_process');
    }
};
