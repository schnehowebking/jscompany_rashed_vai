<?php

// use App\Http\Controllers\backend\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


Route::get('/formexample', function () {
  return view('backend.application.new_application');
});
Route::get('clear', function () {
  Artisan::call('optimize:clear');
  return redirect()->back()->withSuccess("Cache cleared");
});
