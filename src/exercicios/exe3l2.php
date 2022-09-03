<?php session_start();?>
<html> 
<head><title>Curso de PHP com MySQL</title></head> 
<body> 
<form name="form4" method="post" action=> 
<p>Digite nome:<br> 
 <input name="nome" type="text" id="nome" size="30" maxlength="30"></p> 
 <p>Digite idade:<br> 
    <input name="idade" type="number" id="idade" size="30" maxlength="30"></p> 
<p>Digite peso:<br> 
    <input name="peso" type="number id="peso" size="30" maxlength="30"></p>
<p>Digite altura:<br> 
    <input name="altura" type="text" id="altura" size="30" maxlength="30"></p>

<p><input type="submit" value="Add + pessoas" ></p> 

</form> 
</body> 
</html> 

<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso/($altura * $altura);
$ano = date('Y') - $idade;



if ($idade > 18){
        $maior = "Maior de 18 anos";

}
else {
        $maior = "Menor de 18 anos";
}

$pessoa = [
    "nome" => $nome,
    "idade" => $idade,
    "peso" => $peso,
    "altura" => $altura,
    "imc" => $imc,
    "ano" => $ano,
    "midade" => $maior
];

$_SESSION['pessoa'][] = $pessoa;


echo "<pre>"; print_r($_SESSION['pessoa']);
?>