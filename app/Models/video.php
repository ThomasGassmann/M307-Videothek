<?php

class Video extends AbstractModelBase {
    private $wasCreated = false;

    public function __constructor() {
    }

    public $id;
    public $length;
    public $title;
    public $releaseYear;
    public $isBorrowed;

    public static function fromParams($id, $length, $title, $releaseYear, $isBorrowed) {
        $video = new Video();
        $video->id = $id;
        $video->length = $length;
        $video->title = $title;
        $video->releaseYear = $releaseYear;
        $video->isBorrowed = $isBorrowed;;        
        return $video;
    }

    public function create() {
        if (!$this->wasCreated) {
            $this->executeSqlStatement(
                'INSERT INTO video(Title, Length, ReleaseYear, IsBorrowed) values (?, ?, ?, ?)',
                $this->title,
                isset($this->length) ? $this->length : null,
                isset($this->releaseYear) ? $this->releaseYear : null,
                isset($this->isBorrowed) ? $this->isBorrowed : false);
            $this->wasCreated = true;
        }
    }

    public function save() {
        $this->executeSqlStatement(
            'UPDATE video SET Title = ?, Length = ?, ReleaseYear = ?, IsBorrowed = ? WHERE Id = ?',
            $this->title,
            isset($this->length) ? $this->length : null,
            isset($this->releaseYear) ? $this->releaseYear : null,
            isset($this->isBorrowed) ? $this->isBorrowed : false,
            $this->id);
    }

    public function reload() {
        $object = $this->executeSqlStatement('SELECT * FROM video WHERE Id = ?', $this->id);
        $this->mapDbObjectToInstance($object, $this);
    }

    public function delete() {
        if (isset($this->id)) {
            $id = $this->id;
            $this->executeSqlStatement('DELETE FROM video WHERE Id = ?', $id);
        }
    }

    public function getById($id) {
        $object = $this->executeSqlStatement('SELECT * FROM video WHERE Id = ?', $id);
        if (!isset($object[0])) {
            return null;
        }
        $instance = new Video();
        $this->mapDbObjectToInstance($object[0], $instance);
        return $instance;
    }

    public function getAll() {
        $results = $this->executeSqlStatement('SELECT * FROM video');
        $returnArray = array();
        foreach ($results as $res) {
            $instance = new Video();
            $this->mapDbObjectToInstance($res, $instance);
            array_push($returnArray, $instance);
        }
        return $returnArray;
    }

    private function mapDbObjectToInstance($object, $instance) {
        $instance->id = (int)$object["Id"];
        $instance->title = $object["Title"];
        $instance->length = (int)$object["Length"];
        $instance->releaseYear = $object["ReleaseYear"];
        $instance->isBorrowed = (int)$object["IsBorrowed"];
    }
}