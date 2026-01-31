<?php

require_once 'Observable.php';
require_once 'Observer.php';
require_once 'Task.php';

class Moodle implements Observable
{
    protected $mentors = [];
    //private $tasks = [];

    public function addMentor(Observer $mentor)
    {
        $this->mentors[] = $mentor;
    }

    public function addTask(Task $task)
    {
        //$this->tasks[] = $task;
        $this->notifyMentors($task);
    }

    protected function notifyMentors(Task $task)
    {
        foreach ($this->mentors as $mentor) {
            $mentor->deliveredTask($task);
        }
    }
}