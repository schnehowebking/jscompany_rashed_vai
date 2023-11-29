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
          $table->string('site_address')->nullable();
          $table->string('site_municipality')->nullable();
          $table->string('geotechnical_study')->nullable();
          $table->boolean('land_serviced')->nullable();
          $table->boolean('everything_in_sewer')->nullable();
          $table->string('parcel_or_lot_number')->nullable();
          $table->string('type_of_work_selected')->nullable();
          $table->boolean('land_on_excessive_slope')->nullable();
          $table->string('cadastral_section')->nullable();
          $table->string('urban_planning_area')->nullable();
          $table->string('land_acquisition_stage')->nullable();
          $table->string('surface_in_square_meters')->nullable();
          $table->decimal('price_per_square_meter')->nullable();
          $table->decimal('venal_value_of_land')->nullable();
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
