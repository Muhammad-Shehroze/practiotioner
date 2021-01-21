<?php
$tasks = $database->selectAll('todos');

include 'views/index.view.php';