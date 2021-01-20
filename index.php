<?php

$person = [
    'name' => 'ALi', 
    'age' => '23',
    'color'=> 'Brown',
    'married' => true
];
require 'index.view.php';
if ( $person['married']) {
    echo 'Married ' . '<span class = "icon">&#9989</span>';
}