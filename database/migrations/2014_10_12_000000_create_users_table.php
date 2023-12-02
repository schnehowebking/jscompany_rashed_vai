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
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->string('user_name')->unique();
      $table->string('email')->unique();
      $table->string('password');
      $table->string('country_code')->nullable();
      $table->string('phone')->unique()->nullable();
      $table->enum('role', ['sales', 'finance', 'admin'])->default('sales');
      $table->string('country')->nullable();
      $table->string('address')->nullable();
      $table->integer('status')->default(0)->comment('0=pending, 1=active, 2=danger');
      $table->enum('gender', ['male', 'female', 'none'])->default('male');
      $table->string('browser_info')->nullable();
      $table->longText('bio')->nullable();
      $table->longText('social')->nullable();
      $table->string('security_enabled')->nullable();
      $table->string('otp')->nullable();
      $table->timestamp('phone_verified_at')->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->timestamp('last_login')->nullable();
      $table->rememberToken();
      $table->foreignId('current_team_id')->nullable();
      $table->string('profile_photo_path', 2048)->nullable();
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
    Schema::dropIfExists('users');
  }
};
