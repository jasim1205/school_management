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
            $table->integer('student_id')->unique();
            $table->integer('roll');
            $table->string('first_name_en');
            $table->string('first_name_bn')->nullable();
            $table->string('last_name_en');
            $table->string('last_name_bn')->nullable();
            $table->date('date_of_birth');
            $table->string('place_of_birth')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->integer('father_contact')->unique();
            $table->integer('mother_contact')->unique();
            $table->string('gender');
            $table->unsignedBigInteger('class_id')->index();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->unsignedBigInteger('section_id')->index();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->integer('contact_no_en')->unique();
            $table->string('contact_no_bn')->unique()->nullable();
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('image');
            $table->string('present_address_en');
            $table->string('parmanent_address_en');
             $table->integer('status')->default(1)->comment('1=>active 0=>inactive');
            $table->timestamps();
            $table->softDeletes();
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
