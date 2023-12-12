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
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exam_id')->index();
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
            $table->unsignedBigInteger('student_id')->index();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('class_id')->index();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id')->index();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('session_id')->index();
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->decimal('sub_marks',3,1)->nullable();
            $table->decimal('ob_marks',3,1)->nullable();
            $table->decimal('prac_marks',3,1)->nullable();
            $table->decimal('total',3,1)->nullable();
            $table->decimal('gp',3,2)->nullable();
            $table->string('gl')->nullable();
            $table->integer('status')->default(1)->comment('1=>pass 0=>fail');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};
