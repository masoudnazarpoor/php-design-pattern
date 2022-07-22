<?php

namespace App\Services\State;

abstract class AbstractStatus
{
    protected Post $post;

    public function setPost(Post $post)
    {
        $this->entity = $post;
    }

    abstract public function draft();
    abstract public function moderation();
    abstract public function published();


}
