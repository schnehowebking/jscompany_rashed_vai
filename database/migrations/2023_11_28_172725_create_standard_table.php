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
        Schema::create('standard', function (Blueprint $table) {
            $table->id();
            $table->integer('sales_id')->nullable();
            $table->integer('validated_by')->nullable();
            $table->text('name')->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('gender')->enum(['Mr.', 'Ms.', 'Ste.'])->default('Mr.');
            $table->text('telephone')->nullable();
            $table->text('job_type')->nullable();
            $table->text('desired_house_type')->nullable();
            $table->text('have_land')->nullable();
            $table->text('parcel_plan')->nullable();
            $table->text('municipality')->nullable();
            $table->text('surface')->nullable();
            $table->text('financial_simulation')->nullable();
            $table->text('bank')->nullable();
            $table->text('broker')->nullable();
            $table->text('rd1_date')->nullable();
            $table->text('rd1_time')->nullable();
            $table->text('reference')->nullable();
            $table->text('other_source')->nullable();
            $table->text('validated')->nullable();
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
        Schema::dropIfExists('standard');
    }
};
