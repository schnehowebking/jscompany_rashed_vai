<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UsersController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\Rd2BrowerController;

Route::get('test', [CustomerController::class, 'test']);

Route::middleware(['auth'])->group(function () {
  Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
  Route::get('prospect', [ProspectController::class, 'index'])->name('prospect.create');


  Route::get('rd2brower', [Rd2BrowerController::class, 'index'])->name('rd2brower.create');

  Route::resource('customers', CustomerController::class)->except('update');
  Route::post('customers/update', [CustomerController::class, 'update'])->name('customers.update');
  Route::put('customer/update/{id}', [CustomerController::class, 'customer_update'])->name('customer.update');
  Route::resource('administrative', AdminController::class);

  Route::post('store_setting', [SettingController::class, 'store'])->name('store_settings');
  Route::post('env_store_setting', [SettingController::class, 'envSettingStore'])->name('env_store_settings');
  Route::get('app_setting', [SettingController::class, 'appppSetting'])->name('app_settings');

  Route::group(['prefix' => 'app'], function () {
    // Users routes
    Route::resource('users', UsersController::class);
    Route::get('view_user/{user_id}', [UsersController::class, 'viewUser'])->name('view_user');
    Route::get('users_list', [UsersController::class, 'ajaxList'])->name('users_list');
  });
});
