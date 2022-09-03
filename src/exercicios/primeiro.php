<html> 
<head><title>Aprendendo PHP</title></head> 
<body> 
<? 
echo "Primeiro Exemplo"; 
echo "<br>"; 

$a = 10; 
$b = 20; 
$soma = $a + $b; 
//Imprimindo a soma na tela com o comando print. 
print (" soma é: ". $soma."<p>"); 
////Imprimindo a soma na tela com o comando echo. 
echo ("A soma é: ". $soma."<p>"); 
echo "<br>"; 
echo $a." ".$b; 
echo "<br>"; 


$teste = "Mauricio"; 
$vivas = '---$teste--\n'; 
$texto = "Curso de PHP"; 
echo "$vivas"; 
echo "<br>"; 

$texto = "Curso de PHP"; 
$teste = "Mauricio"; 
$vivas = "---$teste---\n"; 
echo "$vivas"; 
echo "<br>"; 

$nome = "Gláucio"; 
$sobrenome = "Nascimento"; 
echo $nome." ".$sobrenome;
echo "<br>"; 

$a = $b = 10; // $a e $b recebem o valor 10 
$c = $a++; // $c recebe 10 e $a passa a ter 11 
$d = ++$b; // $d recebe 11, valor de $b já incrementado
echo $d;
?> 
</body> 
</html> 


