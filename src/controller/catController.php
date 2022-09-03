<?php

require_once('../model/ModelCat.php');

$model = new ModelCat;
// echo "<pre>";
// print_r($_POST);
// print_r($_GET);
// print_r($_FILES);
// die;
// print_r($model->getCategoria());

if(isset($_POST['id']) && !empty($_POST['id'])){
   $model->alterarCat($_POST['id'], $_POST['categoria'],$_FILES['imagem']['name']); 
   uploadimg(); 
   header('location: http://localhost/view/formCat.php');exit;    
}
if (isset($_POST['categoria']) && isset ($_FILES['imagem'])){
   $model->setCategoria($_POST['categoria'],$_FILES['imagem']['name']);
   uploadimg();  
   header('location: http://localhost/view/formCat.php');exit; 
}
   


if(isset($_GET["DeleteCat"])){
   $id = $_GET["DeleteCat"];
   if ($model->DeleteCat($id)){
      header('location: http://localhost/view/formCat.php');exit;
       
   }
   
}

function uploadimg (){
   $uploaddir = '../upload/';
   $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);

   move_uploaded_file($_FILES['imagem']['tmp_name'], '../upload/'. basename($_FILES['imagem']['name']));
   
}


class  catController
{
     
     private $model;
     function __construct()
     {
        $this->model = new ModelCat;
     }
     function getGCategoria()
     {
        return $this->model->getCategoria();
     }

}


?>