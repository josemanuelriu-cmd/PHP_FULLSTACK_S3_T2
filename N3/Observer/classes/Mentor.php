<?php

require_once 'Observer.php';
require_once 'Task.php';

class Mentor implements Observer
{
    protected string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
    
    public function deliveredTask(Task $task): void
    {
        echo "Mentor " . $this->name . " entregada nueva tarea: " . $task->getTitle() . " del estudiante: " . $task->getStudent() . "\n";
    }
}