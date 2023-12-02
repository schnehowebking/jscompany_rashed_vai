<?php

use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;

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
  $message = app_setting('appiontment_validation_sms');
  $message = str_replace('{customer_name}', $prospect->name, $message);
  $message = str_replace('{appointment_date}', $prospect->desired_rd1_date, $message);
  $message = str_replace('{appointment_time}', $prospect->desired_rd1_time, $message);
  try {
    $sms = new \App\TwilioHelper();
    $sms->sendSMS($prospect->telephone_prospect_1, $message);
  } catch (\Exception $e) {
    Log::error("appiontment_validation_sms :" . $e->getMessage());
  }

  try {
    email_notification($prospect->email, $message);
  } catch (Exception $e) {
    Log::error("appiontment_validation_email :" .$e->getMessage());
  }
}

function appiontment_salesperson_sms($prospect) {
  $message = app_setting('appiontment_salesperson_sms');
  $message = str_replace('{sales_person}', $prospect->interlocutor_appointment, $message);
  $message = str_replace('{customer_name}', $prospect->name, $message);
  $message = str_replace('{appointment_time}', $prospect->desired_rd1_time, $message);
  $sales = User::where('id', $prospect->interlocutor_appointment)->first();
  try {
    $sms = new \App\TwilioHelper();
    $sms->sendSMS($sales->phone, $message);
  } catch (\Exception $e) {
    Log::error("appiontment_salesperson_sms :" . $e->getMessage());
  }

  try {
    email_notification($sales->email, $message);
  } catch (Exception $e) {
    Log::error("appiontment_salesperson_mail :" . $e->getMessage());
  }
}

function appiontment_reminder_sms($prospect) {
  $message = app_setting('appiontment_reminder_sms');
  $message = str_replace('{customer_name}', $prospect->name, $message);
  $message = str_replace('{appointment_date}', $prospect->desired_rd1_date, $message);
  $message = str_replace('{appointment_time}', $prospect->desired_rd1_time, $message);
  try {
    $sms = new \App\TwilioHelper();
    $sms->sendSMS($prospect->telephone_prospect_1, $message);
  } catch (\Exception $e) {
    Log::error("appiontment_reminder_sms :" . $e->getMessage());
  }

  try {
    email_notification($prospect->email, $message);
  } catch (Exception $e) {
    Log::error("appiontment_reminder_mail :" . $e->getMessage());
  }
}

function email_notification($to, $message) {
  $project = [
      'body' => $message,
      'thanks' => 'Thank you'
  ];
  Notification::send($to, new EmailNotification($project));
}


