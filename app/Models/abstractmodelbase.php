<?php

abstract class AbstractModelBase {
    public abstract function create();
    public abstract function save();
    public abstract function reload();
    public abstract function delete();
    public abstract function getById($id);
    public abstract function getAll();

    public function exists($id) {
        $item = $this->getById($id);
        return $item === null ? false : true;
    }

    protected function executeSqlStatement($statement, ...$arguments) {
        $pdo = Database::getConnection();
        $statement = $pdo->prepare($statement);
        $i = 1;
        foreach ($arguments as $arg) {
            $statement->bindValue($i, $arg);
            $i++;
        }
        $statement->execute();
        try {
            $returnValue = $statement->fetchAll();
        } catch (Exception $ex) {
            // No return value;
            $returnValue = true;
        }
        return $returnValue;
    }
}