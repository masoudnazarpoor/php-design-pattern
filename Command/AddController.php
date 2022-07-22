<?php

namespace App\Services\Command;

use Illuminate\Support\Facades\Request;

class AddController
{
    public function add(Request $request)
    {
        $addTaskCommand = new AddTaskCommand(
            $request->input('title'),
            $request->input('content'),
            new TaskHandler
        );

        $addTaskCommand->execute();
    }
}
