<?php

interface Observable
{
    public function addMentor(Observer $mentor);
    public function addTask(Task $task);
}