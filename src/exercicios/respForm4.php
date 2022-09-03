<?php
var_dump($_POST);

echo "<br>"; 
echo "<br>"; 

      $nome = $_POST['nome'];
      $idade = $_POST['idade'];
      $peso = $_POST['peso'];
      $altura = $_POST['altura'];
      


echo "Os dados recebidos do formulário são: <p>"; 
echo " 
<table width = '400' border='1' cellspacing='0' cellpadding='0'> 
<tr> 
<td width = '100'>nome:<td> 
<td width = '300'>$nome</td> 
</tr> 
<tr> 
 <tr> 
 <td width = '100'>idade:<td> 
 <td width = '300'>$idade</td> 
 </tr> 
 <tr> 
 <tr> 
 <td width = '100'>peso:<td> 
 <td width = '300'>$peso</td> 
 </tr> 
 <tr> 
 <td width = '100'>altura:<td> 
 <td width = '300'>$altura</td> 
 </tr> 
 <tr> 
 <td width = '100'>ano:<td> 
 <td width = '300'>$ano</td> 
 </tr> 

 </table> 
"; 

?> 
<html> 
<head><title>Curso de PHP</title> 
</head> 
<body> 
<p><font face="Arial, Helvetica, sans-serif" size="4"> 
<a href="form4.html">Clique aqui para voltar ao formul&aacute;rio.</a> 
</font> 
</body> 
</html> 