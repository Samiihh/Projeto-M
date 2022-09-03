<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Sistema de cadastro grupo</title>
    </head>
    <body>
            <div class='campo'>
                <h1 id="titulo">Cadastro de grupo</h1>
                <br>
            </div>
        <form enctype="multipart/form-data" name="form2" method="post" action="../controller/grupoController.php">
            <fieldset class='grupo'>
                <div class='campo'>
                    <label for=""><strong>Nome grupo:</strong></label>
                    <input name="nome_grupo" type="text" id="nome_grupo" size="30" maxlength="30" value="<?php echo (isset ($respostag['nome']) ? $respostag['nome'] : ""); ?>">
                </div>

                <div>
                    <label for=""><strong>Informe Modelo:</strong></label>
                    <input name="modelo" type="text" id="modelo" size="30" maxlength="30" value="<?php echo (isset ($respostag['modelo']) ? $respostag['modelo'] : ""); ?>">
                </div>

                <div>
                    <label for="">Selecione categoria:</label>

                    <select name="id_categoria" id="id_categoria">
                            <?php

                            foreach ($listacategoria AS $categoria){
                                ?>
                            <option value="<?= $categoria['id']?>"><?= $categoria['nome']?></option>
                            <?php
                            }
                            ?>
                        </select>
                </div>
                
                <div>
                    <label for="">Selecione o tipo de cambio:</label>
                        <select name="cambio" id="cambio"> 
                            <option value="1" <?php echo isset($respostag['cambio']) && $respostag['cambio'] ==1 ? 'selected' : ''?>>Manual</option> 
                            <option value="2" <?php echo isset($respostag['cambio']) && $respostag['cambio'] ==2 ? 'selected' : ''?>>Automatico</option> 
                        </select>

                </div>


                <div>
                    <label for=""> Selecione a quantidade de bagagem :</label>
                    <select name="bagagem" id="bagagem" >
                        <?php
                            for ($i = 1; $i <= 5; $i++){
                                if(isset($respostag['bagagem']) && $respostag['bagagem'] == $i)
                                    echo "<option selected>$i</option>";
                                else
                                    echo "<option>$i</option>";
                            }
                            ?>
                    </select>
                </div>    
                
                <div>
                    <label for="">Selecione quantidade de passageiros:</label>
                    <select name="capacidade" id="capacidade"> 
                        <?php
                            for ($i = 1; $i <= 7; $i++){
                                if(isset($respostag['capacidade']) && $respostag['capacidade'] == $i)
                                    echo "<option selected>$i</option>";
                                else
                                    echo "<option>$i</option>";
                            }
                        
                            ?>
                    </select>

                </div>

                <div>
                    <label for=""> Deseja Ar condicionado?</label>
                        <input  type="radio" name="ar" id="ar_sim" value="1" <?php echo isset($respostag['ar_cond']) && $respostag['ar_cond'] ==1 ? 'checked' : '';?>>sim
                        <input  type="radio" name="ar" id="ar_nao" value="2" <?php echo isset($respostag['ar_cond']) && $respostag['ar_cond'] ==2 ? 'checked' : '';?>>não
                </div>
                
                <div>
                    <label for="">Deseja Airbag?</label>
                    <input  type="radio" name="airbag" id="airbag_sim" value="1" <?php echo isset($respostag['airbag']) && $respostag['airbag'] ==1 ? 'checked' : '';?>>sim
                    <input  type="radio" name="airbag" id="airbag_nao" value="2"<?php echo isset($respostag['airbag']) && $respostag['airbag'] ==2 ? 'checked' : '';?>>não

                </div>

                <div>
                    <label for=""> Deseja freios Abs?</label>
                    <input  type="radio" name="freio" id="freio_sim" value="1" <?php echo (isset($respostag['freio']) && $respostag['freio'] ==1 ? 'checked' : '');?>>sim
                    <input  type="radio" name="freio" id="freio_nao" value="2" <?php echo (isset($respostag['freio']) && $respostag['freio'] ==2 ? 'checked' : '');?>>não

                </div>

                <div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    Enviar arquivo de imagem: <input name="imagem" type="file" />
                    <input type="hidden"  name='id_grupo' value= "<?php echo (isset ($respostag['id_grupo']) ? $respostag['id_grupo'] : ""); ?>">
                </div>

                <div>
                    <label for="">Descrição:</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="05" style="width: 26em"></textarea>
                </div>

                <button class="botao" type="submit">Enviar</button>
                <input class="botao" type="submit" name="submit" value="Cancel"> 
                
            </fieldset>
        </form>
        <table border="2">
                <tr>
                    <td>Id</td>
                    <td>Id categoria</td>
                    <td>Nome</td>
                    <td>descrição</td>
                    <td>Modelo</td>
                    <td>bagagem</td>
                    <td>cambio</td>
                    <td>Ar cond</td>
                    <td>Freio</td>
                    <td>Airbag</td>
                    <td>Capacidade</td>
                    <td>imagem</td>
                    <td>Ações</td>
                </tr>
            <?php
        
            foreach($lerUmgrupo as $controlergrupo){
                $cambioarr = ["1"=>"Manual","2"=>"Automatico"];
                $arcondrr =["1"=>"sim","2"=>"Não"];
                $freiorr  =["1"=>"sim","2"=>"Não"];
                $airbagrr =["1"=>"sim","2"=>"Não"];
            echo "<tr>";
            echo "<td>".$controlergrupo["id_grupo"]."</td>";
            echo "<td>".$controlergrupo["id_categoria"]."</td>";
            echo "<td>".$controlergrupo["nome"]."</td>";
            echo "<td>".$controlergrupo["descricao"]."</td>";
            echo "<td>".$controlergrupo["modelo"]."</td>";
            echo "<td>".$controlergrupo["bagagem"]."</td>";
            echo "<td>".$cambioarr[$controlergrupo["cambio"]]."</td>";
            echo "<td>".$arcondrr[$controlergrupo["ar_cond"]]."</td>";
            echo "<td>".$freiorr[$controlergrupo["freio"]]."</td>";
            echo "<td>".$airbagrr[$controlergrupo["arbag"]]."</td>";
            echo "<td>".$controlergrupo["capacidade"]."</td>";
            echo "<td><img src='../upload/".$controlergrupo["imagem"]."'</td>";
            
            echo "<td><a href='../view/formGrupo.php?alterarGrupo=".$controlergrupo["id_grupo"]."'>Alterar<a>  <a href='../controller/grupoController.php?DeleteGrupo=".$controlergrupo["id_grupo"]."'>Deletar<a></td>";

            }
            ?>
        </table>
        
    </body>
</html>