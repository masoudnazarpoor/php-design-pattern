<?php

namespace App\Services\State\StatusConcrete;

use App\Services\State\AbstractStatus;

class ModerationStatus extends AbstractStatus
{
    public function draft()
    {
        $this->post->transitionTo(new DraftStatus);
    }
    
    public function moderation()
    {
        $this->post->transitionTo(new ModerationStatus);
        
    }
    
    public function published()
    {
        $this->post->transitionTo(new PublishedStatus);
    }
}
