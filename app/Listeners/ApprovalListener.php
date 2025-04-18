<?php

namespace App\Listeners;

use App\Events\Approval;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class ApprovalListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct() {}

    /**
     * Handle the event.
     */
    public function handle(Approval $event): void
    {
        Log::info('Approval processed');
    }

    public function shouldQueue(): bool
    {
        return false;
    }
}
