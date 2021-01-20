<?php
function connectToDb() {
    try {
        return new PDO('mysql:host=localhost;dbname=practitioner', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }  
}
function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'TASK');
}
?>