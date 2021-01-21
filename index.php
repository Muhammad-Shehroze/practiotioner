<?php
$database = require 'core/bootstrap.php';
$routerr = new router;
require 'routes.php';
require $routerr->direct(""); 