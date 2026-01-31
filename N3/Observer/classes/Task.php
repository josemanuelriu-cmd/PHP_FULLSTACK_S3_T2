<?php

class Task
{
    private string $title;
    private string $description;
    private string $student;

    public function __construct(string $title, string $description, string $student)
    {
        $this->title = $title;
        $this->description = $description;
        $this->student = $student;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function getStudent(): string
    {
        return $this->student;
    }
}