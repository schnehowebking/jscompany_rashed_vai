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
          $table->decimal('contribution');
          $table->decimal('loan_at_zero_rate');
          $table->decimal('employer_loan');
          $table->decimal('relay_loan');
          $table->decimal('regional_subsidy');
          $table->decimal('non_loan_financing_capacity');
          $table->string('ready');
          $table->string('schedule');
          $table->decimal('debt');
          $table->decimal('debt_with_credit');
          $table->decimal('total_financing_of_project');
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
