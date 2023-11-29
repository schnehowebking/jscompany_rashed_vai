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
        Schema::create('prospects', function (Blueprint $table) {
          $table->id();
          $table->string('behalf');
          $table->string('first_name');
          $table->string('genre');
          $table->string('telephone_prospect_1');
          $table->string('desired_work');
          $table->string('desired_house_type');
          $table->boolean('has_land');
          $table->string('land_municipality')->nullable();
          $table->string('land_document_requested')->nullable();
          $table->string('desired_municipality');
          $table->string('desired_surface');
          $table->string('financial_simulation');
          $table->string('simulation_amount');
          $table->string('simulation_bank');
          $table->string('simulation_broker');
          $table->dateTime('desired_rd1_date')->nullable();
          $table->string('desired_rd1_time')->nullable();
          $table->string('how_know_company');
          $table->string('interlocutor_appointment');
          $table->string('exchange_validated_by');
          $table->string('assignment_prospect_rd1_validation');
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
        Schema::dropIfExists('prospects');
    }
};
