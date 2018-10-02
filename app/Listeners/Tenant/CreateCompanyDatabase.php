<?php

namespace App\Listeners\Tenant;

use App\Events\Tenant\DatabaseCreated;
use App\Tenant\Database\DatabaseManager;
use App\Events\Tenant\CompanyCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateCompanyDatabase
{
    private $database;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(DatabaseManager $database)
    {
        $this->database = $database;
    }

    /**
     * Handle the event.
     *
     * @param  CompanyCreated  $event
     * @return void
     */
    public function handle(CompanyCreated $event)
    {
        $company = $event->company();
        
        if (!$this->database->createDatabase($company)) {
            throw new \Exception('Error create database');
        }

        // run migrations
        event(new DatabaseCreated($company));
    }
}
