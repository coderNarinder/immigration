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
        Schema::create('course_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('course_type_id')->default(0);
            $table->integer('country_id')->default(0); 
            $table->string('course_duration')->nullable();
            $table->string('min_gpa')->nullable();
            $table->string('image')->nullable();
            $table->string('course_fee')->nullable();
            $table->string('exam_requirements')->nullable();
            $table->longText('other_details')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_details');
    }
};
