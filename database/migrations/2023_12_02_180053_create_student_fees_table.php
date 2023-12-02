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
        Schema::create('student_fees', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('student_id')->index();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->decimal('total_fees');
            $table->date('fee_month');
            $table->year('fee_year');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_fees');
    }
};
