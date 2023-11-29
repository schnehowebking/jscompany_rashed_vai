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
        Schema::create('household_resource_capacities', function (Blueprint $table) {
          $table->id();
          $table->foreignId('prospect_id')->constrained('prospects');
          $table->decimal('annual_tax_income')->nullable();
          $table->decimal('annual_rental_income_before_abatement')->nullable();
          $table->decimal('annual_rental_income_after_abatement')->nullable();
          $table->decimal('potential_help_financial_assistance')->nullable();
          $table->decimal('financial_capacity_of_household')->nullable();
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
        Schema::dropIfExists('household_resource_capacities');
    }
};
