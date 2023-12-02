<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Log;

function app_setting($setting) {
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

function appiontment_validation_sms($prospect) {
  try {
    $sms = new \App\TwilioHelper();
    $message = app_setting('appiontment_validation_sms');
    $message = str_replace('{customer_name}', $prospect->name, $message);
    $message = str_replace('{appointment_date}', $prospect->desired_rd1_date, $message);
    $message = str_replace('{appointment_time}', $prospect->desired_rd1_time, $message);
    $sms->sendSMS($prospect->telephone_prospect_1, $message);
  } catch (\Exception $e) {
    Log::error($e->getMessage());
  }
}

function appiontment_salesperson_sms($prospect) {
  try {
    $sms = new \App\TwilioHelper();
    $message = app_setting('appiontment_salesperson_sms');
    $message = str_replace('{sales_person}', $prospect->interlocutor_appointment, $message);
    $message = str_replace('{customer_name}', $prospect->name, $message);
    $message = str_replace('{appointment_time}', $prospect->desired_rd1_time, $message);
    $sms->sendSMS(app_setting('sales_person_phone'), $message);
  } catch (\Exception $e) {
    Log::error($e->getMessage());
  }
}

function appiontment_reminder_sms($prospect) {
  try {
    $sms = new \App\TwilioHelper();
    $message = app_setting('appiontment_reminder_sms');
    $message = str_replace('{customer_name}', $prospect->name, $message);
    $message = str_replace('{appointment_date}', $prospect->desired_rd1_date, $message);
    $message = str_replace('{appointment_time}', $prospect->desired_rd1_time, $message);
    $sms->sendSMS($prospect->telephone_prospect_1, $message);
  } catch (\Exception $e) {
    Log::error($e->getMessage());
  }
}
