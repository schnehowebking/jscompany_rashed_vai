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
        Schema::create('rd_2_browers', function (Blueprint $table) {
          $table->id();
          $table->foreignId('caller_id')->constrained('rd2_caller_information');
          $table->string('name_or_ste');
          $table->string('first_name');
          $table->string('current_address');
          $table->string('municipality');
          $table->string('mobile_phone');
          $table->string('landline_phone');
          $table->date('date_of_birth');
          $table->string('place_of_birth');
          $table->string('current_residence');
          $table->string('business_phone');
          $table->string('email');
          $table->string('profession');
          $table->string('type_of_contract');
          $table->integer('professional_maturity_months');
          $table->string('bank_name');
          $table->string('savings_info');
          $table->decimal('annual_tax_income');
          $table->integer('child_dependent_on_tax');
          $table->decimal('rental_charge');
          $table->decimal('rental_income');
          $table->decimal('rental_income_70_percent');
          $table->integer('bank_seniority_months');
          $table->integer('seniority_pel_months');
          $table->decimal('credit_remaining_to_settle');
          $table->decimal('credit_a_in_progress_per_month');
          $table->integer('remaining_month_credit_a_in_progress');
          $table->string('family_situation');
          $table->decimal('personal_contribution');
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
        Schema::dropIfExists('rd_2_browers');
    }
};
