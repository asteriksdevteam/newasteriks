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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string("department");
            $table->string("job_heading");
            $table->longText("job_specification");
            $table->longText("job_overview");
            $table->longText("job_description");
            $table->string("full_allowance")->nullable();
            $table->string("leave_encashment")->nullable();
            $table->string("LDopp")->nullable();
            $table->string("recognition_rewards")->nullable();
            $table->string("medical_insurance")->nullable();
            $table->string("maternity_paternity_leave")->nullable();
            $table->string("increment_twice_a_year")->nullable();
            $table->string("paid_time_off")->nullable();
            $table->string("mental_health_leave")->nullable();
            $table->string("number_of_vacancies");
            $table->string("working_hours");
            $table->string("job_shift");
            $table->string("job_type");
            $table->string("city");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
