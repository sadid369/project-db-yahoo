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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column:'stu_id');
            $table->foreign(columns:'stu_id')
            ->references('id')
            ->on('students')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->string(column:'book');
            $table->date(column:'due_date');
            $table->boolean(column:'status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
