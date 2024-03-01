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
        Schema::create('visa_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('visa_type_id')->default(0);
            $table->integer('country_id')->default(0);
            $table->longText('overview')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('visa_details');
    }
};
