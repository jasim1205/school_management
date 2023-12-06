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
        Schema::create('student_fee_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fee_id')->index();
            $table->unsignedBigInteger('student_id')->index();
            $table->unsignedBigInteger('class_id')->index();
            $table->decimal('fee_amount');
            $table->string('fee_month');
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
        Schema::dropIfExists('student_fee_details');
    }
};
