<?php

class ModelCat{    
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

    public function getCategoria()
    {
        $result = $this->conn->query("SELECT * FROM categoria" );
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function setCategoria($nome,$imagemcat){
        $result = $this->conn->prepare('INSERT INTO  categoria(nome,imagemcat) VALUES (?,?)');
        $result ->bind_param('ss',$nome,$imagemcat);
        $result->execute();
    }

    public function lerUmCat($id){
        $resultc=$this->conn->prepare("SELECT * FROM  cadastro.categoria WHERE id = ?");
        $resultc->bind_param("i",$id);
        $resultc->execute();
        $result=$resultc->get_result();
        return $result->fetch_assoc();
    }

    public function alterarCat($id,$nome,$imagemcat = ''){
       $result= $this->conn->prepare("UPDATE categoria SET  nome = ?,imagemcat =  ? WHERE id = ?");
        $result->bind_param("ssi",$nome,$imagemcat,$id,);
        $result->execute();
        return  $result -> affected_rows; 
    }  

    public function DeleteCat($id){
        $result = $this->conn->prepare("DELETE FROM categoria WHERE id = ? ");
        $result->bind_param('i',$id);
        $result->execute();
        return  $result -> affected_rows;
    }

}

?>