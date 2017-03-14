<?php

class Database {
    private static $pdo;

    public static function getConnection(): PDO {
        try {
            if (!isset(self::$pdo)) {
                self::$pdo = new PDO('mysql:host=localhost;dbname=kurseictbz_30702', 'kurseictbz_30702', 'db_307_pw_02', [
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