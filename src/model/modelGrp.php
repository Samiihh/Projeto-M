<?php

use LDAP\Result;

class ModelGrp{    
    public $conn;
    function __construct()
    {
        $this->conn = $this -> conection();
    }
    private function conection ()

    {
        $mysqli = new mysqli("mysqlphp","root","123456","cadastro" );
        if ($mysqli->connect_error) {
            exit("failed to connect to MySQL: (" . $mysqli->connect_error . ") " . $mysqli->connect_);
       }
       return $mysqli;
    }

    public function getgrupo()
    {
     $resultg = $this->conn->query("SELECT * FROM grupo " );
     return $resultg->fetch_all(MYSQLI_ASSOC);
    }
    public function setgrupo($nome_grupo,$descricao,$modelo,$bagagem,$cambio,$ar,$freio,$airbag,$capacidade,$imagem,$id_categoria){
    $resultg = $this->conn->prepare( "INSERT INTO  grupo(nome,descricao,modelo,bagagem,cambio,ar_cond,freio,arbag,capacidade,imagem,id_categoria) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $resultg ->bind_param('sssiiiiiisi',$nome_grupo,$descricao,$modelo,$bagagem,$cambio,$ar,$freio,$airbag,$capacidade,$imagem,$id_categoria);
    
    $resultg->execute();

    
    }

    public  function lergrupo(){
        $result = $this->conn->query("SELECT grupo.id_grupo AS idgrupo,grupo.nome AS gupon,descricao,modelo,bagagem,cambio,ar_cond,freio,arbag,capacidade,imagem,id_categoria, categoria.nome AS catnome FROM grupo INNER JOIN categoria ON grupo.id_categoria = categoria.id  ORDER BY grupo.nome");
        return $result->fetch_all();
    }
    public function lerUmGrupo($id_grupo){
        $stmt=$this->conn->prepare("SELECT * FROM grupo where id_grupo = ?");
        $stmt->bind_param("i",$id_grupo);
        $stmt->execute();
        $result =$stmt->get_result();
        return $result->fetch_assoc();
    }

    public function alterarGrupo(
        $id_categoria,
        $nome_grupo,
        $descricao,
        $modelo,
        $bagagem,
        $cambio,
        $ar_cond,
        $freio,
        $airbag,
        $capacidade,
        $imagem,
        $id_grupo
    ){$stmt= $this->conn->prepare("UPDATE grupo SET 
        id_categoria= ?,
        nome =?,
        descricao = ?,
        modelo = ?,
        bagagem = ?,
        cambio = ?,
        ar_cond = ?,
        freio = ?,
        arbag = ?,
        capacidade = ?,
        imagem = ?
        WHERE id_grupo = ?");

        $stmt->bind_param("isssiiiiiisi",
        $id_categoria,
        $nome_grupo,
        $descricao,
        $modelo,
        $bagagem,
        $cambio,
        $ar_cond,
        $freio,
        $airbag,
        $capacidade,
        $imagem,
        $id_grupo);
        $stmt->execute();
        return  $stmt-> affected_rows; 
                
    }  

    public function Deletegrupo ($id_grupo){
        $result = $this->conn->prepare("DELETE FROM grupo  WHERE id_grupo = ? ");
        $result->bind_param('i',$id_grupo);
        $result->execute();
        return  $result -> affected_rows; 
    }


}


