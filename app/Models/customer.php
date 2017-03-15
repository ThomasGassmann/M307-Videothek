<?php

class Customer extends AbstractModelBase {
    private $wasCreated = false;

    public function __constructor() {
    }

    public $id;
    public $firstName;
    public $lastName;
    public $mail;
    public $phone;
    public $memberShipStateId;

    public static function fromParams($id, $firstName, $lastName, $mail, $phone, $memberShipId) {
        $customer = new Customer();
        $customer->id = $id;
        $customer->firstName = $firstName;
        $customer->lastName = $lastName;
        $customer->mail = $mail;
        $customer->phone = $phone;
        $customer->memberShipId = $memberShipId;        
        return $customer;
    }

    public function create() {
        if (!$this->wasCreated) {
            $this->executeSqlStatement(
                'INSERT INTO customer(FirstName, LastName, Mail, Phone, MembershipState) values (?, ?, ?, ?, ?)',
                $this->firstName,
                $this->lastName,
                isset($this->mail) ? $this->mail : null,
                $this->phone,
                $this->memberShipStateId);
            $this->wasCreated = true;
        }
    }

    public function save() {
        $this->executeSqlStatement(
            'UPDATE customer SET FirstName = ?, LastName = ?, Mail = ?, Phone = ?, MembershipState = ? WHERE Id = ?',
            $this->firstName,
            $this->lastName,
            $this->mail,
            isset($this->phone) ? $this->phone : null,
            $this->memberShipStateId,
            $this->id);
    }

    public function reload() {
        $object = $this->executeSqlStatement('SELECT * FROM customer WHERE Id = ?', $this->id);
        $this->mapDbObjectToInstance($object, $this);
    }

    public function delete() {
        if (isset($this->id)) {
            $this->executeSqlStatement('DELETE FROM customer WHERE Id = ?', $this->id);
        }
    }

    public function getById($id) {
        $object = $this->executeSqlStatement('SELECT * FROM customer WHERE Id = ?', $id);
        if (!isset($object[0])) {
            var_dump($id);
            return null;
        }
        $instance = new Customer();
        $this->mapDbObjectToInstance($object[0], $instance);
        return $instance;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAll() {
        $results = $this->executeSqlStatement('SELECT * FROM customer');
        $returnArray = array();
        foreach ($results as $res) {
            $instance = new Customer();
            $this->mapDbObjectToInstance($res, $instance);
            array_push($returnArray, $instance);
        }
        return $returnArray;
    }

    private function mapDbObjectToInstance($object, $instance) {
        $instance->id = (int)$object["Id"];
        $instance->firstName = $object["FirstName"];
        $instance->lastName = $object["LastName"];
        $instance->mail = $object["Mail"];
        $instance->phone = $object["Phone"];
        $instance->memberShipStateId = (int)$object["MembershipState"];
    }
}