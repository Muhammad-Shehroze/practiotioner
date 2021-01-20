<?php

$person = [
    'name' => 'ALi', 
    'age' => '23',
    'color'=> 'Brown',
    'married' => false
];
require 'index.view.php';
echo $person['married'] ? "yes Married" : "Not Married";