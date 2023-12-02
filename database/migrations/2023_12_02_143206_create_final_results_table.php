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
        Schema::create('final_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id')->index();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->unsignedBigInteger('exam_id')->index();
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
            $table->unsignedBigInteger('student_id')->index();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('total_marks');
            $table->integer('total_gp')->nullable();
            $table->string('total_gl')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_results');
    }
};
