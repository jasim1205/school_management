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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id')->unique();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('first_name_en');
            $table->string('first_name_bn')->nullable();
            $table->string('last_name_en');
            $table->string('last_name_bn')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('place_of_birth')->nullable();
            $table->string('subject');
            $table->decimal('salary',8,2)->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('contact_no_en')->unique();
            $table->string('contact_no_bn')->unique()->nullable();
            $table->unsignedBigInteger('department_id')->index();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('designation_id')->index();
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('present_address');
            $table->string('parmanent_address');
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
        Schema::dropIfExists('teachers');
    }
};
