<?php

require_once 'classes/Task.php';
require_once 'classes/Moodle.php';
require_once 'classes/Mentor.php';

$task1 = new Task("PHP basico", "unciones basicas de PHP", "Carlos");
$task2 = new Task("PHP advanzado", "Funciones avanzadas de PHP", "Lucía");
$task3 = new Task("POO en PHP", "Clases y objetos en PHP", "Miguel");

$mentor1 = new Mentor("Ruben");
$mentor2 = new Mentor("Ana");

$moodle1 = new Moodle();
$moodle2 = new Moodle();

$moodle1->addMentor($mentor1);
$moodle1->addMentor($mentor2);

echo "Tareas del moodle 1:\n";
echo $moodle1->addTask($task1);
echo $moodle1->addTask($task2);

echo "\nTareas del moodle 2:\n";
$moodle2->addMentor($mentor2);
echo $moodle2->addTask($task3);

/*
$moodle->notifyMentors($task1);
$moodle->notifyMentors($task2);
*/