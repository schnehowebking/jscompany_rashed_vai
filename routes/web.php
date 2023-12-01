<?php

// use App\Http\Controllers\backend\CustomerController;

use App\Http\Controllers\Rd2BrowerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('testmsg', [Rd2BrowerController::class, 'testSms']);
Route::get('clear', function () {
  Artisan::call('optimize:clear');
  return redirect()->back()->withSuccess("Cache cleared");
});
