<?php
echo "Resultado do quiz<br><br>";
$questao1 = $_POST['questao1'];
$questao2 = $_POST['questao2'];
$questao3 = $_POST['questao3'];
$questao4 = $_POST['questao4'];
$questao5 = $_POST['questao5'];
$questao6 = $_POST['questao6'];
$questao7 = $_POST['questao7'];
$questao8 = $_POST['questao8'];
$questao9 = $_POST['questao9'];
$questao10 = $_POST['questao10'];
$questao11 = $_POST['questao11'];
$questao12 = $_POST['questao12'];
$questao13 = $_POST['questao13'];
$questao14 = $_POST['questao14'];
 
echo "Questao 1 (opção escolhida) = ".$questao1."<br>";
echo "Questao 2 (opção escolhida) = ".$questao2."<br>";
echo "Questao 3 (opção escolhida) = ".$questao3."<br>";
echo "Questao 4 (opção escolhida) = ".$questao4."<br>";
echo "Questao 5 (opção escolhida) = ".$questao5."<br>";
echo "Questao 6 (opção escolhida) = ".$questao6."<br>";
echo "Questao 7 (opção escolhida) = ".$questao7."<br>";
echo "Questao 8 (opção escolhida) = ".$questao8."<br>";
echo "Questao 9 (opção escolhida) = ".$questao9."<br>";
echo "Questao 10 (opção escolhida) = ".$questao10."<br>";
echo "Questao 11 (opção escolhida) = ".$questao11."<br>";
echo "Questao 12 (opção escolhida) = ".$questao12."<br>";
echo "Questao 13 (opção escolhida) = ".$questao13."<br>";
echo "Questao 14 (opção escolhida) = ".$questao14."<br><br>";
 
 
$resposta1 = "a";
$resposta2 = "a";
$resposta3 = "a";
$resposta4 = "a";
$resposta5 = "a";
$resposta6 = "c";
$resposta7 = "a";
$resposta8 = "b";
$resposta9 = "b";
$resposta10 = "c";
$resposta11 = "a";
$resposta12 = "c";
$resposta13 = "a";
$resposta14 = "b";

$acertou = 0;
$errou = 0;
 
if ($questao1 == $resposta1){
    $acertou++;
    echo "Questao 1 correta<br>";
}

else{
    $errou++;
    echo "Questao 1 errada<br>";  
} 
 
if ($questao2 == $resposta2){
    $acertou++;
    echo "Questao 2 correta<br>";
}

else{
    $errou++;
    echo "Questao 2 errada<br>"; 
} 


if ($questao3 == $resposta3){
    $acertou++;
    echo "Questao 3 correta<br>";
}

else {
    $errou++;
    echo "Questao 3 errada<br>";
}


if ($questao4 == $resposta4){
    $acertou++;
    echo "Questao 4 correta<br>";
}

else{
    $errou++;
    echo "Questao 4 errada<br>";
}
 

if ($questao5 == $resposta5){
    $acertou++;
    echo "Questao 5 correta<br>";
}

else{
    $errou++;
    echo "Questao 5 errada<br>";
} 

if ($questao6 == $resposta6){
    $acertou++;
    echo "Questao 6 correta<br>";
}

else{
    $errou++;
    echo "Questao 6 errada<br>";
} 

if ($questao7 == $resposta7){
    $acertou++;
    echo "Questao 7 correta<br>";
}

else{
    $errou++;
    echo "Questao 7 errada<br>";
} 

if ($questao8 == $resposta8){
    $acertou++;
    echo "Questao 8 correta<br>";
}

else{
    $errou++;
    echo "Questao 8 errada<br>";  
} 

if ($questao9 == $resposta9){
    $acertou++;
    echo "Questao 9 correta<br>";
}

else {
    $errou++;
    echo "Questao 9 errada<br>";
}

if ($questao10 == $resposta10){
    $acertou++;
    echo "Questao 10 correta<br>";
}

else{
    $errou++;
    echo "Questao 10 errada<br>";
} 

if ($questao11 == $resposta11){
    $acertou++;
    echo "Questao 11 correta<br>";
}

else{
    $errou++;
    echo "Questao 11 errada<br>";
} 

if ($questao12 == $resposta12){
    $acertou++;
    echo "Questao 12 correta<br>";
}

else{
    $errou++;
    echo "Questao 12 errada<br>";
} 

if ($questao13 == $resposta13){
    $acertou++;
    echo "Questao 13 correta<br>";
}

else{
    $errou++;
    echo "Questao 13 errada<br>";
} 

if ($questao14 == $resposta14){
    $acertou++;
    echo "Questao 14 correta<br><br>";
}


else{
    $errou++;
    echo "Questao 14 errada<br>";
} 

echo 'Quantidade de acertos: '.$acertou."<br><br>";
echo 'Quantidade de erros: '.$errou."<br><br>";


?>