"<html> 
<head><title>Lista 1 de Exercicios </title></head> 
<body> 
<? 



# 1) Crie um algoritmo que receba um número e verifique se esse valor é positivo, negativo
#ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero"//

echo "Exercicio 1";
echo "<br>"; 
echo "<br>"; 

$valor = -4;

if ($valor > 0) { 
      echo "Valor Positivo"; 
    } 
    elseif ($valor < 0) { 
        echo "Valor Negativo"; 
    } 
    else { 
        echo "Igual a Zero";
    } 

  
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 

echo "Exercicio 2";
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 

//2) Crie um algoritmo que receba um número e mostre a tabuada de 1 a 10 do mesmo;

$numero = 4;

for ($count = 1; $count <= 10; $count++) {
    echo $numero ."x".$count."=".($numero * $count)."<br>";
}

echo "<br>"; 
echo "<br>"; 
echo "<br>"; 

echo "Exercicio 3";
echo "<br>";
echo "<br>";

//Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número 
//seja fora desse intervalo, informar que não existe mês com este número;
    
$meses =[ 1=> "Janeiro", 
          2 => "Fevereiro", 
          3 => "Março",
          4 =>"Abril", 
          5 => "Maio", 
          6 => "Junho", 
          7=> "Julho", 
          8 => "Agosto", 
          9=> "Setembro", 
          10 => "Outubro",
          11 => "Novembro", 
          12 => "Dezembro"] ;

$numero= 7;

if($numero >=1 && $numero <=12 ){
    echo $meses[$numero];
}
else {
    echo"Mês inválido";
}


echo "<br>";
echo "<br>";
echo "Exercicio 4";
echo "<br>";
echo "<br>";

// Crie um algoritmo que receba um array de números, crie funções que:
//a. retorne ordenado de forma crescente;
//b. retorne ordenado de forma decrescente;
//c. retorne o maior número;
//d. retorne o menor número;
//e. retorne a quantidade de itens do array;
//f. retorne a soma de todos os itens;
//g. retorne se a soma dos itens é par ou impar;
//h. retorne a media da soma dos valores;

$anumero = [5,2,7,12,6];

echo "Exercicio 4-a";
echo "<br>";
echo "<br>";
sort($anumero,SORT_NUMERIC);
foreach ($anumero as $anum){
    echo"$anum<br>";
}
echo "Exercicio 4-b";
echo "<br>";
echo "<br>";
rsort($anumero,SORT_NUMERIC);
foreach ($anumero as $ranum){
    echo"$ranum<br>";
}

echo "Exercicio 4-c";
echo "<br>";
echo "<br>";

echo max($anumero);
echo "<br>";
echo "<br>";

echo "Exercicio 4-d";
echo "<br>";
echo "<br>";
echo min($anumero);

echo "<br>";
echo "Exercicio 4-e";
echo "<br>";
echo "<br>";

echo count($anumero);

echo "<br>";
echo "Exercicio 4-f";
echo "<br>";
echo "<br>";

echo "soma: = ".array_sum($anumero)."\n";

echo "<br>";
echo "<br>";
echo "Exercicio 4-g";
echo "<br>";
echo "<br>";

$anumsoma = array_sum($anumero);
  if($anumsoma % 2 == 0 ) {
    echo "Número Par";
}
else {
    echo "Número ìmpar";
}
echo "<br>";
echo "<br>";
echo "Exercicio 4-h";
echo "<br>";
echo "<br>";

$anuncount = count($anumero);
$anumedia = $anumsoma / $anuncount;
echo $anumedia;



?> 
</body> 
</html>"