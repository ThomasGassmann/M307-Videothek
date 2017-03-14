<?php

class VideoBorrow extends AbstractModelBase {
    private $wasCreated = false;

    public function __constructor() {
    }

    public $videoId;
    public $customerId;
    public $borrowDate;

    public static function fromParams($videoId, $customerId, $borrowDate) {
        $borrow = new VideoBorrow();
        $borrow->videoId = $videoId;
        $borrow->customerId = $customerId;
        $borrow->borrowDate = $borrowDate;     
        return $borrow;
    }

    public function create() {
        if (!$this->wasCreated) {
            $this->executeSqlStatement(
                'INSERT INTO videoborrowing(VideoId, CustomerId, BorrowDate) values (?, ?, ?)',
                $this->videoId,
                $this->customerId,
                $this->borrowDate);
            $this->wasCreated = true;
        }
    }

    public function save() {
        $this->executeSqlStatement(
            'UPDATE videoborrowing SET VideoId = ?, CustomerId = ?, BorrowDate = ? WHERE VideoId = ? and CustomerId = ? and BorrowDate = ?',
            $this->videoId,
            $this->customerId,
            $this->borrowDate,
            $this->videoId,
            $this->customerId,
            $this->borrowDate);
    }

    public function reload() {
        $object = $this->executeSqlStatement(
            'SELECT * FROM videoborrowing WHERE VideoId = ? and CustomerId = ? and BorrowDate = ?', 
            $this->videoId, 
            $this->customerId,
            $this->borrowDate);
        $this->mapDbObjectToInstance($object, $this);
    }

    public function delete() {
        if (isset($this->videoId) && isset($this->customerId)) {
            $this->executeSqlStatement(
                'DELETE FROM videoborrowing WHERE VideoId = ? and CustomerId = ? and BorrowDate = ?', 
                $this->videoId,
                $this->customerId,
                $this->borrowDate);
        }
    }

    public function getById($dataArray) {
        return $this->getByParams(
            $dataArray['videoId'],
            $dataArray['customerId'],
            $dataArray['borrowDate']);
    }

    public function getByParams($videoId, $customerId, $borrowDate) {
        $object = $this->executeSqlStatement(
            'SELECT * FROM videoborrowing WHERE VideoId = ? and CustomerId = ? and BorrowDate = ?',
             $videoId,
             $customerId,
             $borrowDate);
        if (!isset($object[0])) {
            return null;
        }
        $instance = new VideoBorrow();
        $this->mapDbObjectToInstance($object[0], $instance);
        return $instance;
    }

    public function getAll() {
        $results = $this->executeSqlStatement('SELECT * FROM videoborrowing');
        $returnArray = array();
        foreach ($results as $res) {
            $instance = new VideoBorrow();
            $this->mapDbObjectToInstance($res, $instance);
            array_push($returnArray, $instance);
        }
        return $returnArray;
    }

    private function mapDbObjectToInstance($object, $instance) {
        $instance->videoId = (int)$object["VideoId"];
        $instance->customerId = (int)$object["CustomerId"];
        $instance->borrowDate = $object["BorrowDate"];
    }
}