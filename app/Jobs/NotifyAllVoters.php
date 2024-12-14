<?php

namespace App\Jobs;

use App\Mail\IdeaStatusUpdatedMailable;
use App\Models\Idea;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NotifyAllVoters implements ShouldQueue
{
    use Queueable;

    public $idea;
    /**
     * Create a new job instance.
     */
    public function __construct(Idea $idea)
    {
        $this->idea = $idea;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $this->idea->votes()
            ->select('name', 'email')
            ->chunk(100, function ($voters) {
                foreach( $voters as $user) {
                    Mail::to($user)
                        ->queue(new IdeaStatusUpdatedMailable($this->idea));
                }
            });
    }
}
