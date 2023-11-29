<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    $allHelperFiles = glob(\app_path('Helpers') . '/*.php');
    foreach ($allHelperFiles as $key => $helperFile) {
      require_once $helperFile;
    }
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }
}