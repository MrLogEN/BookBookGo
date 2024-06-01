<?php

interface IBookRepository{

    public function getAll();
    public function getById($id);
    public function create($args);

}
?>