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
          $table->string('name')->nullable();
          $table->string('first_name')->nullable();
          $table->string('genre')->nullable();
          $table->integer('interview_done')->default(0);
          $table->string('telephone_prospect_1')->nullable();
          $table->string('desired_work')->nullable();
          $table->string('desired_house_type')->nullable();
          $table->boolean('has_land')->nullable();
          $table->string('land_municipality')->nullable();
          $table->string('land_document_requested')->nullable();
          $table->string('desired_municipality')->nullable();
          $table->string('desired_surface')->nullable();
          $table->string('financial_simulation')->nullable();
          $table->string('simulation_amount')->nullable();
          $table->string('simulation_bank')->nullable();
          $table->string('simulation_broker')->nullable();
          $table->dateTime('desired_rd1_date')->nullable();
          $table->string('desired_rd1_time')->nullable();
          $table->string('how_know_company')->nullable();
          $table->string('interlocutor_appointment')->nullable();
          $table->string('exchange_validated_by')->nullable();
          $table->string('assignment_prospect_rd1_validation')->nullable();
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
