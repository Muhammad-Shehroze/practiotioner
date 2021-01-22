<?php
$tasks = $app['database']->selectAll('todos');

include 'views/index.view.php';