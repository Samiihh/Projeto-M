<html> 
<head><title>Lista 1 de Exercicios </title></head> 
<body> 
<? 


echo "<br>"; 
echo "Exercicio 2 lista 2";
echo "<br>"; 
echo "<br>"; 

$vetana = [2,1,1];
$vetbob = [1,1,1];
$vetr = array(2);

$vetr [0]=0;
$vetr [1]=0;


function calculaResultado($a,$b){
    $vetr = array(2);
    
    $vetr [0]=0;
    $vetr [1]=0;
    for($i =0 ; count($a) <> $i; $i++){
        if($a[$i] > $b[$i]){
            $vetr [0] += 1 ;
        }elseif($a[$i] < $b[$i])
            $vetr [1] +=  1 ;
    }
    return $vetr;
}


 print_r (calculaResultado($vetana,$vetbob));


 

?> 
</body> 
</html>