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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->integer('school_id_en')->unique();
            $table->integer('school_id_bn')->nullable()->unique();
            $table->string('school_name_en');
            $table->string('school_name_bn')->nullable();
            $table->string('school_title_en');
            $table->string('school_title_bn')->nullable();
            $table->string('school_address_en');
            $table->string('school_address_bn')->nullable();
            $table->string('logo')->nullable();
            $table->integer('eiin_no_en')->unique();
            $table->integer('eiin_no_bn')->nullable();
            $table->string('email')->unique();
            $table->string('web_address')->nullable()->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
