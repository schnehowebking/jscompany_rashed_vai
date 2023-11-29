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
        Schema::create('project_financings', function (Blueprint $table) {
          $table->id();
          $table->foreignId('prospect_id')->constrained('prospects');
          $table->decimal('contribution')->nullable();
          $table->decimal('loan_at_zero_rate')->nullable();
          $table->decimal('employer_loan')->nullable();
          $table->decimal('relay_loan')->nullable();
          $table->decimal('regional_subsidy')->nullable();
          $table->decimal('non_loan_financing_capacity')->nullable();
          $table->string('ready')->nullable();
          $table->string('schedule')->nullable();
          $table->decimal('debt')->nullable();
          $table->decimal('debt_with_credit')->nullable();
          $table->decimal('total_financing_of_project')->nullable();
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
        Schema::dropIfExists('project_financings');
    }
};
