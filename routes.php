<?php
// $router->define([
//     'practiotioner19/index.php' => 'controllers/index.php',
//     'practiotioner19/about' => 'controllers/about.php',
//     'practiotioner19/culture' => 'controllers/culture.php',
//     'practiotioner19/contact' => 'controllers/contact.php'
// ]);

$router->get('practiotioner19/index.php', 'controllers/index.php');
$router->get('practiotioner19/about', 'controllers/about.php');
$router->get('practiotioner19/culture', 'controllers/culture.php');
$router->get('practiotioner19/contact', 'controllers/contact.php');
$router->post('practiotioner19/names', 'controllers/add_name.php');