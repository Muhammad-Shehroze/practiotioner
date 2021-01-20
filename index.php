<?php
include 'function.php';
$person = [
    'name' => 'ALi', 
    'age' => '20',
    'color'=> 'Brown',
    'married' => true
];
if (check_age($person['age'])) 
    echo 'Come in Tou are Older Enough';
else 
    echo 'Sorry You are Not Older';
require 'index.view.php';
if ( $person['married']) {
    echo 'Married ' . '<span class = "icon">&#9989</span>';
}