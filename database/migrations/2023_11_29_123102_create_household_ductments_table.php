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
        Schema::create('household_ductments', function (Blueprint $table) {
          $table->id();
          $table->foreignId('prospect_id')->constrained('prospects');
          $table->decimal('eligible_debt_before_credit')->nullable();
          $table->decimal('current_credit')->nullable();
          $table->decimal('debt_with_monthly_credit')->nullable();
          $table->decimal('debt_with_annual_credit')->nullable();
          $table->decimal('capacity')->nullable();
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
        Schema::dropIfExists('household_ductments');
    }
};
