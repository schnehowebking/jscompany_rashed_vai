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
        Schema::create('financing_conditions', function (Blueprint $table) {
          $table->id();
          $table->foreignId('prospect_id')->constrained('prospects');
          $table->decimal('loan_rate')->nullable();
          $table->decimal('insurance_rate')->nullable();
          $table->string('teag')->nullable();
          $table->integer('duration_in_years')->nullable();
          $table->integer('duration_in_months')->nullable();
          $table->decimal('current_credit')->nullable();
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
        Schema::dropIfExists('financing_conditions');
    }
};
