<?php
require_once "../controller/catDController.php";
$controllerdados = new CatDController;
$lerUmcat = $controllerdados->getCategoria();

if (isset($_GET['alterarcat'])){
  $id=$_GET['alterarcat'];
  $resposta = $controllerdados->lerUmcat($id);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="style.css">
    
        <title>Sistema de cadastro Categoria</title>
    </head>
    <body>
            <div class="campo">
                <h1 id="titulo">Cadastro Categoria</h1>
                <br>
            </div class="campo">
        <form enctype="multipart/form-data" name="form1" method="post" action="../controller/catController.php">
            <fieldset class="grupo">

                <div class="campo">
                    <label for="nome"><strong>Nome Categoria :</strong></label>
                    <input name="categoria" type="text" id="categoria" value="<?php echo (isset ($resposta) ? $resposta['nome'] : ""); ?>"required>
                    <br>
                </div>

                <div class="campo">
                    <br>
                    <label for="imagem"><strong>Enviar arquivo:</strong></label>
                    <!-- MAX_FILE_SIZE deve preceder o campo input -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <!-- O Nome do elemento input determina o nome da array $_FILES -->
                     <input name="imagem" type="file" />
                     <input type="hidden"  name='id' value= "<?php echo (isset ($resposta) ? $resposta['nome'] : ""); ?>">
                    <br>
                </div >  
                <br>
                <button class="botao" type="submit">Enviar</button>
                <input class="botao" type="submit" name="submit" value="Cancel">   
            </fieldset >

           

        </form>
               <div clas='cat'>
                    <br>                
                   <caption>Lista de Categorias</caption>

                     <br>
                        <table  border="1" >
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>imagem</td>
                                <td>Ações</td>
                            </tr>
                            <?php
                        
                            foreach($lerUmcat as $controllerDado){
                            echo "<tr>";
                            echo "<td>".$controllerDado["id"]."</td>";
                            echo "<td>".$controllerDado["nome"]."</td>";
                            echo "<td><img src='../upload/".$controllerDado['imagemcat']."'</td>";
                            echo "<td><a href='../view/formCat.php?alterarCat=".$controllerDado["id"]."'>Alterar<a> <a href='../controller/catController.php?DeleteCat=".$controllerDado["id"]."'>Deletar<a></td>";
                            };

                            ?>
                        </table>
                </div>

    </body>
</html>
