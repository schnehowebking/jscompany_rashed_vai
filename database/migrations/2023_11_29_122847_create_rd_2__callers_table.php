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
        Schema::create('rd_2__callers', function (Blueprint $table) {
          $table->id();
            $table->foreignId('prospect_id')->constrained('prospects');
            $table->string('name_or_ste')->nullable();
            $table->string('first_name')->nullable();
            $table->string('current_address')->nullable();
            $table->string('municipality')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('landline_phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('current_residence')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('profession')->nullable();
            $table->string('type_of_contract')->nullable();
            $table->integer('professional_maturity_months')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('savings_info')->nullable();
            $table->decimal('annual_tax_income')->nullable();
            $table->integer('child_dependent_on_tax')->nullable();
            $table->decimal('rental_charge')->nullable();
            $table->decimal('rental_income')->nullable();
            $table->decimal('rental_income_70_percent')->nullable();
            $table->integer('bank_seniority_months')->nullable();
            $table->integer('seniority_pel_months')->nullable();
            $table->decimal('credit_remaining_to_settle')->nullable();
            $table->decimal('credit_a_in_progress_per_month')->nullable();
            $table->integer('remaining_month_credit_a_in_progress')->nullable();
            $table->string('family_situation')->nullable();
            $table->decimal('personal_contribution')->nullable();
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
        Schema::dropIfExists('rd_2__callers');
    }
};
