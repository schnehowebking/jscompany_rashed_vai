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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->comment('follow, like, subscribe, ad_publish, purchased');
            $table->bigInteger('user_id')->nullable()->comment('receiver_id');
            $table->bigInteger('ad_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->string('message')->nullable();
            $table->boolean('read')->default(0)->comment('0=unread, 1=read');
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
        Schema::dropIfExists('notifications');
    }
};