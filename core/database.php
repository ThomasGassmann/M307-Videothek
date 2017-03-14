<?php

class Database {
    private static $pdo;

    public static function getConnection(): PDO {
        try {
            if (!isset(self::$pdo)) {
                self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=video', 'root', '123', [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                ]);
            }

            return self::$pdo;
        } catch (PDOException $e) {
            die('No connection to the database could be established: ' . $e->getMessage());
        }
    }
}