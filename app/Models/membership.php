<?php

class Membership extends ModelBase implements IModelBase {
    private $wasCreated = false;

    public function __constructor() {
    }

    public $id;
    public $name;
    public $borrowDays;

    public static function fromParams($id, $name, $borrowDays) {
        $membership = new Membership();
        $membership->$id = $id;
        $membership->$name = $name;
        $membership->$borrowDays = $borrowDays;     
        return $customer;
    }

    public function create() {
        if (!$this->wasCreated) {
            $this->executeSqlStatement(
                'INSERT INTO membership(Name, BorrowDays) values (?, ?)',
                $this->name,
                $this->borrowDays);
            $this->wasCreated = true;
        }
    }

    public function save() {
        $this->executeSqlStatement(
            'UPDATE membership SET Name = ?, BorrowDays = ? WHERE Id = ?',
            $this->name,
            $this->borrowDays,
            $this->id);
    }

    public function reload() {
        $object = $this->executeSqlStatement('SELECT * FROM membership WHERE Id = ?', $this->id);
        $this->mapDbObjectToInstance($object, $this);
    }

    public function delete() {
        if (isset($this->id)) {
            $this->executeSqlStatement('DELETE FROM membership WHERE Id = ?', $this->id);
        }
    }

    public function getById($id) {
        $object = $this->executeSqlStatement('SELECT * FROM membership WHERE Id = ?', $id);
        $instance = new Membership();
        if (!isset($object[0])) {
            return null;
        }
        $this->mapDbObjectToInstance($object[0], $instance);
        return $instance;
    }

    public function getAll() {
        $results = $this->executeSqlStatement('SELECT * FROM membership');
        $returnArray = array();
        foreach ($results as $res) {
            $instance = new Membership();
            $this->mapDbObjectToInstance($res, $instance);
            array_push($returnArray, $instance);
        }
        return $returnArray;
    }

    private function mapDbObjectToInstance($object, $instance) {
        $instance->id = $object["Id"];
        $instance->name = $object["Name"];
        $instance->borrowDays = $object["BorrowDays"];
    }
}