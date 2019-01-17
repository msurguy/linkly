<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Link;

class CleanLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'links:clean {days?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleans old links from the system';

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
     * Define a command to clean up links that are older than N days and have no views at all
     *
     * @return mixed
     */
    public function handle()
    {
        // Get date and time of right now
        $dateInstance = Carbon::now();
        $howManyDays = $this->argument('days');

        // By default set to 14 days
        if (!$howManyDays) {
            $howManyDays = 14;
        }

        $expirationDate	= $dateInstance->subDays($howManyDays);

        // Clean up old links by comparing the creation date with current date/time - 14 days exactly
        $expiredLinks = Link::where('created_at','<', $expirationDate->toDateTimeString())->get();
        $linkCount = 0;

        foreach ( $expiredLinks as $link) {
            if ($link->views == 0) {
                // we can also check if the links have a user attached to them or not
                // by checking $link->user_id

                $link->delete(); // remove from DB
                $linkCount++;
            }
        }

        $outputstr = $linkCount.' expired links removed';

        $this->info($outputstr);
    }
}
