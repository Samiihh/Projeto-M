<?php

include_once('../model/modelGrp.php');

class GrupoDController {

    private $model;

    function __construct()
    {
        $this->model = new ModelGrp;
    }

   public function getgrupo()
    {
        return $this->model->getgrupo();
    }

    public function lerUmgrupo($id_grupo)
    {
        return $this->model->lerUmgrupo($id_grupo);
    }



}