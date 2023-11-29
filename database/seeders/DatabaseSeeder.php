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
    public function run()
    {
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
        \App\Models\Customer::factory(30)->create();
  }
}
