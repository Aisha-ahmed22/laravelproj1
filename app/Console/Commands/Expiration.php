<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\User;
class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire user daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       // $users = User::findOrfail(1);//$mn el user = model::5od el data
       $users = User::get();
       foreach ($users as $user)
       {
        $user->update
        ([
            'active' => 1
        ]);
       }
      
    }
}
