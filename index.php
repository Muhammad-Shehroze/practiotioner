<?php
include 'function.php';
class Task {
    public $description;
    public $completed = "false";
    public function __construct($description)
    {
        $this->description = $description;
    }

}

$tasks = [
    new Task("This is a new Task"),
    new Task("This is a second Task"),
    new Task("This is a third Task")
];
include 'index.view.php';