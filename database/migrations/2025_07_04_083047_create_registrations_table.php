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
         Schema::create('registrations', function (Blueprint $table) {
    $table->id();
    $table->string('FirstName');
    $table->string('LastName');
    $table->string('Gender');
    $table->string('Email')->unique();
    $table->string('Password');
    $table->string('PhoneNo');
    $table->string('Course');
    $table->string('Languages')->nullable();
    $table->string('Resume')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};



