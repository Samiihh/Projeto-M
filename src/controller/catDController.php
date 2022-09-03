<?php

include_once('../model/ModelCat.php');

class CatDController {

    private $model;

    function __construct()
    {
        $this->model = new ModelCat;
    }

   public function getCategoria()
    {
        return $this->model->getCategoria();
    }

    public function lerUmcat($id)
    {
        return $this->model->lerUmCat($id);
    }



}

