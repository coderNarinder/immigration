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
        Schema::create('exam_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('exam_type_id')->default(0);
            $table->longText('overview')->nullable();
            $table->longText('exam_pattern')->nullable();
            $table->integer('fee')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_details');
    }
};
