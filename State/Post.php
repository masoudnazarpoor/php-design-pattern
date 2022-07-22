<?php

namespace App\Services\State;

use App\Services\State\StatusConcrete\DraftStatus;

class Post
{
    protected $status;


    public function __construct()
    {
        $this->transitionTo(new DraftStatus);
    }

    public function transitionTo(AbstractStatus $status)
    {
        $this->status = $status;
        $this->status->setPost($this);
    }


    public function draft()
    {
        $this->status->draft();
    }

    public function moderation()
    {
        $this->status->moderation();
    }

    public function published()
    {
        $this->status->published();
    }
}
