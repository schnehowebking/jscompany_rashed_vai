<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
      $user = User::where('email', 'admin@gmail.com')->first();
      if (!$user) {
        User::create([
          'name' => "Super Admin",
          'user_name' => "developer",
          'email' => 'admin@gmail.com',
          'role' => 'admin',
          'email_verified_at' => now(),
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'remember_token' => Str::random(10),
        ]);
      }

      $s1 = app_setting('appiontment_validation_sms');
      if(strlen($s1) < 1) {
        \App\Models\Setting::create([
          'key' => 'appiontment_validation_sms',
          'value' => "Dear {customer_name}; Through this message, we let's confirm your scheduled appointment on {appointment_date}, at {appointment_time}, at the headquarters of our company located on the Zéphir ring road, space Katoury to above Air Caraibes 97300 Cayenne; with our. Make a choice While waiting to meet you, Please accept, Sir, Madam, my distinguished greetings. Sincerely",
        ]);
      }

      $s2 = app_setting('appiontment_salesperson_sms');
      if(strlen($s2) < 1) {
        \App\Models\Setting::create([
          'key' => 'appiontment_salesperson_sms',
          'value' => "{sales_person}, We confirm that you have
          meeting with {customer_name}? > SAVE THEM INFORMATION for a first contact ; In this regard, we kindly prepare suitable plans for a budget of 0? for pavilions of type (Make Choice). You must confirm the appointment,
          by validating Appointment 1. Management",
        ]);
      }

      $s3 = app_setting('appiontment_reminder_sms');
      if(strlen($s2) < 1) {
        \App\Models\Setting::create([
          'key' => 'appiontment_reminder_sms',
          'value' => "Dear {customer_name};
          I will come back to you to confirm your appointment tomorrow at {appointment_time}; At the headquarters of our company (our address) Please bring all documents with you that can help us produce the best expertise to serve you. I would also sincerely appreciate a confirmation from you to prepare all our reception methods. Looking forward to meeting you, dear  {customer_name}. (Trade name)",
        ]);
      }
    }
}
