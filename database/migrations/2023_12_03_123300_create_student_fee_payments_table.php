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
        Schema::create('student_fee_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id')->index();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->unsignedBigInteger('student_roll')->index();
            $table->foreign('student_roll')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('student_name')->index();
            $table->foreign('student_name')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('fee_id')->index();
            $table->foreign('fee_id')->references('id')->on('fees')->onDelete('cascade');
            $table->string('fee_month');
            $table->string('fee_year');
            $table->decimal('amount');
            $table->date('payment_date')->nullable();
            $table->integer('status')->default(0)->comment('1=>paid 0=>unpaid');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_fee_payments');
    }
};
