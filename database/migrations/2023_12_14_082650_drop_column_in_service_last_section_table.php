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
        Schema::table('service_last_section', function (Blueprint $table) {
            $table->dropColumn('icon_2');
            $table->dropColumn('icon_3');
            $table->dropColumn('image_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_last_section', function (Blueprint $table) {
            //
        });
    }
};
