<?php

use App\Models\Setting;

function app_setting($setting)
{
  $setting = Setting::where('key', $setting)->first();
  if (isset($setting)) {
    if ($setting->is_image == 0) {
      $setting = isset($setting) ? $setting->value : "";
    } else {
      $setting = isset($setting) ? '/app_assets/' . $setting->value : "";
    }
  } else {
    $setting = '';
  }
  return $setting;
}