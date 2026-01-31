<?php

interface Observer
{
    public function deliveredTask(Task $task): void;
}