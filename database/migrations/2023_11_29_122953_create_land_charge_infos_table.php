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
        Schema::create('land_charge_infos', function (Blueprint $table) {
          $table->id();
          $table->foreignId('prospect_id')->constrained('prospects');
          $table->string('site_address');
          $table->string('site_municipality');
          $table->string('geotechnical_study');
          $table->boolean('land_serviced');
          $table->boolean('everything_in_sewer');
          $table->string('parcel_or_lot_number');
          $table->string('type_of_work_selected');
          $table->boolean('land_on_excessive_slope');
          $table->string('cadastral_section');
          $table->string('urban_planning_area');
          $table->string('land_acquisition_stage');
          $table->string('surface_in_square_meters');
          $table->decimal('price_per_square_meter');
          $table->decimal('venal_value_of_land');
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
        Schema::dropIfExists('land_charge_infos');
    }
};
