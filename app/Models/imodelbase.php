<?php

interface IModelBase {
    public function create();
    public function save();
    public function reload();
    public function delete();
    public function getById($id);
    public function getAll();
}