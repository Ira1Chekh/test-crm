<?php

namespace App\Listeners;

use App\Mail\CompanyCreated as CompanyCreatedMail;
use App\Events\CompanyCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendCompanyCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CompanyCreated  $event
     * @return void
     */
    public function handle(CompanyCreated $event)
    {
        Mail::to('admin@admin.com')->send(
            new CompanyCreatedMail($event->company)
        );
    }
}
