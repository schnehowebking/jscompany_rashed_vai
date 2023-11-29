<?php

namespace App\Console\Commands;

use App\Models\Customer;
use App\Models\Application;
use Illuminate\Console\Command;

class ApplicationRemove extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:application';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $applications = Application::with('customer')->whereBetween('create_at', [now()->subMinutes(15), now()])->get();
      foreach($applications as $application) {
        if(!$application->customer) {
          $application->delete();
        }
      }

      $customers = Customer::with('application')->whereBetween('create_at', [now()->subMinutes(15), now()])->get();
      foreach($customers as $customer) {
        if(!$customer->application) {
          $customer->delete();
        }
      }
    }
}
