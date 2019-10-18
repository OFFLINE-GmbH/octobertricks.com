<?php namespace OFFLINE\Tricks\Console;

use Illuminate\Console\Command;
use OFFLINE\Tricks\Classes\DataGenerators\Comments;
use OFFLINE\Tricks\Classes\DataGenerators\Tags;
use OFFLINE\Tricks\Classes\DataGenerators\Topics;
use OFFLINE\Tricks\Classes\DataGenerators\Tricks;
use OFFLINE\Tricks\Classes\DataGenerators\Users;

class Seed extends Command
{
    /**
     * @var string The console command name.
     */
    protected $name = 'tricks:seed';

    /**
     * @var string The console command description.
     */
    protected $description = 'No description provided yet...';

    /**
     * Execute the console command.
     * @return void
     */
    public function handle()
    {
        // Reset data
        $this->call('plugin:refresh', ['name' => 'Offline.Tricks']);

        $this->info("Generating tags...");
        Tags::run();
        $this->info("Generating topics...");
        Topics::run();
        $this->info("Generating users...");
        Users::run();
        $this->info("Generating tricks...");
        Tricks::run();
        $this->info("Generating comments...");
        Comments::run();
    }
}
