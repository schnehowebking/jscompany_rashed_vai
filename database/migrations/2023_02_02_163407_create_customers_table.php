<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('application_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('dob')->nullable();
            $table->string('ssn')->nullable();
            $table->string('driver_license')->nullable();
            $table->string('dl_issue_date')->nullable();
            $table->string('dl_exp_date')->nullable();
            $table->string('anual_gross_income')->nullable();
            $table->string('additional_income')->nullable();
            $table->enum('status', ['temp', 'pending', 'reviewed', 'approved', 'processing'])->default('temp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};