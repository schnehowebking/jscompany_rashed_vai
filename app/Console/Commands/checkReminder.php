<?php

namespace App\Console\Commands;

use App\Models\Prospect;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class checkReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reminder for interview';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        $prospects = Prospect::where('reminded', 0)
          ->where('desired_rd1_date', '>=', now())
          ->where('desired_rd1_date', '<=', now()->addDay())
          ->get();

        foreach ($prospects as $prospect) {

          appiontment_validation_sms($prospect);

          $prospect->reminded = 1;
          $prospect->save();

          // $prospect->user->notify(new \App\Notifications\InterviewReminder($prospect));
        }
    }
}
