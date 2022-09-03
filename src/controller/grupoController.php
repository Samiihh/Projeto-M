<?php

require_once('../model/modelGrp.php');

$model = new ModelGrp;
// echo "<pre>";
// print_r($model->getgrupo());
//  print_r($_FILES);

if(isset($_POST['id_grupo']) && !empty($_POST['id_grupo'])){
   
   $model->alterarGrupo(
      $_POST['id_categoria'],
      $_POST['nome_grupo'],
      $_POST['descricao'],
      $_POST['modelo'],
      $_POST['bagagem'],
      $_POST['cambio'],
      $_POST['ar'],
      $_POST['freio'],
      $_POST['airbag'],
      $_POST['capacidade'],
      $_FILES['imagem']['name'],
      $_POST['id_grupo']);
      uploadimgg();
      header('location: http://localhost/view/formGrupo.php');exit;
}
if(isset($_POST['nome_grupo']) && isset($_POST['descricao']) && isset($_POST['modelo']) && isset($_POST['bagagem']) && isset($_POST['cambio']) && isset($_POST['ar']) && isset($_POST['freio']) && isset($_POST['airbag']) && isset($_POST['capacidade']) && isset($_FILES['imagem']['name']) && isset($_POST['id_categoria'])){
     $model->setgrupo(
      $_POST['nome_grupo'],
      $_POST['descricao'],
      $_POST['modelo'],
      $_POST['bagagem'],
      $_POST['cambio'],
      $_POST['ar'],
      $_POST['freio'],
      $_POST['airbag'],
      $_POST['capacidade'],
      $_FILES['imagem']['name'],
      $_POST['id_categoria']);
      uploadimgg();
      header('location: http://localhost/view/formGrupo.php');exit;
}


if(isset($_GET["DeleteGrupo"])){
   $id = $_GET["DeleteGrupo"];
   if ($model->DeleteGrupo($id)){
      header('location: http://localhost/view/formGrupo.php');exit;
   } 
}


function uploadimgg (){
   $uploaddir = '../upload/';
   $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);

   move_uploaded_file($_FILES['imagem']['tmp_name'], '../upload/'. basename($_FILES['imagem']['name']));
   
}



class grupoController
{
     
     private $model;
     function __construct()
     {
        $this->model = new ModelGrp;
     }
     function getgrupo()
     {
        return $this->model->getgrupo();
     }

}


?>