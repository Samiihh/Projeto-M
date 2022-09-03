<?php 

// Recebe os dados do formulário com a variável $_POST 
$primeironumero= $_POST["Primeiro_numero"]; 
$segundonumero = $_POST["Segundo_numero"]; 
$Operacao = $_POST["Operacao"]; 

switch($Operacao){

    case "Soma" :
        $resultado = $primeironumero + $segundonumero;
        break;
    case "Subtracao":
        $resultado = $primeironumero - $segundonumero;
        break;

    case "Divisao":
        $resultado = $primeironumero / $segundonumero;
        break;

    case "Multiplicacao":
        $resultado = $primeironumero * $segundonumero;
        break;
    }


// Exibe os dados na página de resposta: RespForm.php 
echo "Os dados recebidos do formulário são: <p>"; 
echo " 
<table width = '400' border='1' cellspacing='0' cellpadding='0'> 
 <tr> 
 <td width = '100'>Primeiro numero:<td> 
 <td width = '300'>$primeironumero</td> 
 </tr> 
 <tr> 
 <td width = '100'>segundo numero:<td> 
 <td width = '300'>$segundonumero</td> 
 </tr> 
 <tr> 
 <td width = '100'>Operacao:<td> 
 <td width = '300'>$Operacao</td> 
 </tr> 
 <tr> 
 <td width = '100'>Resultado:<td> 
 <td width = '300'>$resultado </td> 
 </tr> 
 </table> 
"; 

?> 
<html> 
<head><title>Curso de PHP</title> 
</head> 
<body> 
<p><font face="Arial, Helvetica, sans-serif" size="4"> 
<a href="form2.html">Clique aqui para voltar ao formul&aacute;rio.</a> 
</font> 
</body> 
</html> 