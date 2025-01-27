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
        Schema::create('manage_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_image')->nullable();
            $table->string('teacher_name');
            $table->string('designation');
            $table->string('phone_number')->unique();
            $table->string('facebook_link')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_teachers');
    }
};
