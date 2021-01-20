<?php
include 'function.php';
include 'Task.php';
$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);
include 'index.view.php';