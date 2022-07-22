<?php

namespace App\Services\Command;

class AddTaskCommand implements Command
{
    public function __construct(
        public readonly string $title,
        public readonly string $content,
        private TaskHandler $taskHandler,
    ) {
    }

    public function execute()
    {
        $this->taskHandler->add($this);
    }
}
