<html> 
<head><title>Lista 2 de Exercicios </title></head> 
<body> 
<? 

echo "Exercicio 1 lista 2";
echo "<br>"; 
echo "<br>"; 

function ConvertSectoDay($n)
{
    $day = floor($n / (24 * 3600));
 
    $n = ($n % (24 * 3600));
    $hour = $n / 3600;
 
    $n %= 3600;
    $minutes = $n / 60 ;
 
    $n %= 60;
    $seconds = $n;
     
echo ("$day days $hour hours $minutes minutes $seconds seconds");
         
}
 

{
     
    
    $n = 129600;
    ConvertSectoDay($n);
    return 0;
}


?> 
</body> 
</html>