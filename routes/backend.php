<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UsersController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\ProspectController;
// use App\Http\Controllers\Rd2BrowerController;
use App\Http\Controllers\Rd2InterviewController;

Route::get('test', [CustomerController::class, 'test']);

Route::middleware(['auth'])->group(function () {
  Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
  Route::get('prospect', [ProspectController::class, 'index'])->name('prospect.index');
  Route::get('prospect/create', [ProspectController::class, 'create'])->name('prospect.create');
  Route::post('prospect/store', [ProspectController::class, 'store'])->name('prospect.store');
  Route::get('prospect/edit/{id}', [ProspectController::class, 'edit'])->name('prospect.edit');
  Route::put('prospect/edit/{id}', [ProspectController::class, 'update'])->name('prospect.update');

  // Route::resource('rd2brower', Rd2BrowerController::class);
  Route::resource('rd2interviews', Rd2InterviewController::class);
  Route::get('rd2interviews', [ProspectController::class, 'index'])->name('rd2interviews.index');

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
