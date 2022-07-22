<?php

namespace App\Services\TemplateMethod;

use Illuminate\Support\Collection;

abstract class UserReport
{
   
    public function generate(Collection $users)
    {
        $filtered = $this->prepare($users);
        return $this->export($filtered);
    }

    public function prepare(Collection $users)
    {
        return $users->filter(fn ($user) => $user->id > 10);
    }

    abstract public function export(Collection $users);
}
