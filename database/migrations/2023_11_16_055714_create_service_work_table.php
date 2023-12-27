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
        Schema::create('service_work', function (Blueprint $table) {
            $table->id();
            $table->string('service_id');
            $table->string('first_work_heading');
            $table->longText('first_work_content');
            $table->string('first_work_icon');
            $table->string('first_work_image');
            $table->string('second_work_heading');
            $table->longText('second_work_content');
            $table->string('second_work_icon');
            $table->string('second_work_image');
            $table->string('third_work_heading');
            $table->longText('third_work_content');
            $table->string('third_work_icon');
            $table->string('third_work_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_work');
    }
};
