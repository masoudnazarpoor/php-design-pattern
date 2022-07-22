<?php

namespace App\Services\State\StatusConcrete;

use App\Services\State\AbstractStatus;

class DraftStatus extends AbstractStatus
{
    public function draft()
    {
        $this->post->transitionTo(new DraftStatus);
    }
    
    public function moderation()
    {
        # publish and log
        
    }
    
    public function published()
    {
        throw new \Exception("Method not allowed");
    }
}
