<?php

include 'Conversoes.php';

$divisor = $_POST['divisor'];
$dividendo = $_POST['dividendo'];
$A = '00000000';
$contador;
$deslocaEsquerda;
$ADec = 0;
$dividendoDec;
$ADecFinal;
$arrayA = array(0 => 0, 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0);
$arrayDividendo = str_split($dividendo); // transforma a string em array
$arrayDivisor = str_split($divisor); // transforma a string em array
$count = 8;

for($i = 0; $i < 8; $i++){
    if($arrayDivisor[$i] == 1){
        $contador = $count;
        break;
    }
    $count--;
}

while($contador > 0){
    
    $arrayA[0] = $arrayA[1];
    $arrayA[1] = $arrayA[2];
    $arrayA[2] = $arrayA[3];
    $arrayA[3] = $arrayA[4];
    $arrayA[4] = $arrayA[5];
    $arrayA[5] = $arrayA[6];
    $arrayA[6] = $arrayA[7];
    $arrayA[7] = $arrayDividendo[0];
    $arrayDividendo[0] = $arrayDividendo[1];
    $arrayDividendo[1] = $arrayDividendo[2];
    $arrayDividendo[2] = $arrayDividendo[3];
    $arrayDividendo[3] = $arrayDividendo[4];
    $arrayDividendo[4] = $arrayDividendo[5];
    $arrayDividendo[5] = $arrayDividendo[6];
    $arrayDividendo[6] = $arrayDividendo[7];
    
    $conversor = new Conversoes();
    $dividendoDec = $conversor->binToDec($arrayDividendo);
    $ADec -= $conversor->binToDec($arrayDivisor);
    
    if($ADec < 0){
        $arrayDividendo[7] = 0;
        $ADec += $conversor->binToDec($arrayDivisor);
        $A = $conversor->decToBin($ADec);
    }
    else{
        $arrayDividendo[7] = 1;
    }
    $contador--;
    
}

echo '<br><br><br>Resto = ' . $A[0] . $A[1] . $A[2] . $A[3] . $A[4] . $A[5] . $A[6] . $A[7];
echo '<br>Quociente = ' . $arrayDividendo[0] . $arrayDividendo[1] . $arrayDividendo[2] . $arrayDividendo[3] . $arrayDividendo[4] . $arrayDividendo[5] . $arrayDividendo[6] . $arrayDividendo[7];

echo '<br><br><form action="index.php"><input type="submit" value="Voltar"></form>';