<?php

include 'Task.php';
include 'Project.php';

// Создаем проект
$project = new Project("Разработка веб-приложения");

// Создаем задачи
$task1 = new Task("Сделать дизайн", "Создать макеты для приложения");
$task2 = new Task("Разработать API", "Создать RESTful API для приложения");

// Добавляем задачи в проект
$project->addTask($task1);
$project->addTask($task2);

// Выводим информацию о проекте и задачах
echo $project . "\n";
echo $task1 . "\n";
echo $task2 . "\n";

// Изменяем статус задачи
$task1->setStatus("Выполнено");
echo $task1 . "\n";

?>
