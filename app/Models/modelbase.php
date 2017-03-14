<?php

class ModelBase {
    protected function executeSqlStatement($statement, ...$arguments) {
        $pdo = Database::getConnection();
        $statement = $pdo->prepare($statement);
        $i = 1;
        foreach ($arguments as $arg) {
            $statement->bindParam($i++, $arg);
        }
        $statement->execute();
        return $statement->fetchAll();
    }
}