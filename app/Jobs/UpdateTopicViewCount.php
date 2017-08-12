<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Topics;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateTopicViewCount extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $topic;

    /**
     * UpdateTopicViewCount constructor.
     * 
     * @param Topics $topic
     */
    public function __construct(Topics $topic)
    {
        $this->topic = $topic;
    }

    /**
     * execute a job
     */
    public function handle()
    {
        if ($this->attempts() > 1) {
            $this->release(10);
        }
        $this->topic->updateViewCount();
    }

}
