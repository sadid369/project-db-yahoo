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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name',length:30);
            $table->integer(column:'age');
            $table->string(column:'email', length:40)->nullable()->unique();
            $table->string(column:'address');
            $table->string(column:'city');
            $table->string(column:'phone');
            $table->string(column:'password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};