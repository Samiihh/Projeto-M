<?php
      $texto = $_POST['texto'];
      $palavra = str_word_count($texto);
     
   
echo "Quantidade de palavras digitadas: <p>"; 
echo " 
<table width = '400' border='1' cellspacing='0' cellpadding='0'> 
 <tr> 
 <td width = '100'>Texto:<td> 
 <td width = '300'>$texto</td> 
 </tr> 
 <tr> 
 <tr> 
 <td width = '100'>Quantidade de Palavras:<td> 
 <td width = '300'>$palavra</td> 
 </tr> 
 <tr> 
 </table> 
"; 

?> 
<html> 
<head><title>Curso de PHP</title> 
</head> 
<body> 
<p><font face="Arial, Helvetica, sans-serif" size="4"> 
<a href="form3.html">Clique aqui para voltar ao formul&aacute;rio.</a> 
</font> 
</body> 
</html> 