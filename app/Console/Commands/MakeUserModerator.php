<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserModerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-user-moderator {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make user as moderator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::where('id', $this->argument('id'))->first();
        if (!$user) {
            $this->error('User not found');
            return;
        }
        $user->is_moderator = true;
        $user->save();
        $this->info("User {$user->name} has been made moderator");
    }
}
