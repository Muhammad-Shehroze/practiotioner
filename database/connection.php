<?php
class connection {
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=practitioner', 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}