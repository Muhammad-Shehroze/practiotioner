<?php
$database = require 'core/bootstrap.php';
$routerr = new router;
require 'routes.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
require $routerr->direct($uri); 