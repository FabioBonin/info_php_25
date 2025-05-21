<?php
echo "Ola Mundo! <br> ";
//comentario
/*$x = 2 + 2;
echo $x ;
echo "<br>";
$x = 3 + 3;
echo $x ;
$x = 2 + 2;
echo $x ;
echo "<br>";
$x = 3 + 3;
echo $x ;
const DATA_NASCIMENTO = "26/09/2000"; //snake_case
$resultatoSoma = 30 + 30;
$resultatoSoma = 30;
$resultatoSoma2 = 30;
$resultatoSoma2 += 30;
// echo $$resultatoSoma; //camelCase
echo "<br>";
echo date("d/m/y");

$valorA = 2;
$valorB = 4;
if ($valorA == $valorB){
    echo "Os numeros são iguail.";
 } else if ($valorA != $valorB) {
    echo "Os numeros não são iguail.";
 } else {
    echo "Os numeros não são validos";
 }
*/
$seuNome = "Fábio";
$ano = 2000;
$anoAtual = date("Y");
$Idade = $anoAtual -= $ano;

if ($Idade >= 18 ) {
 echo "$seuNome é maior de idade. <br> Sua idade é $Idade";
     
}
 else 
 { 
    echo "$seuNome é menor de idade. <br> Sua idade é $Idade";
 }
echo "<br>";

 $prova1 = 8;
 $prova2 = 7;
 $prova3 = 6;
 $prova4 = 9;
 $soma = $prova1 += $prova2 += $prova3 += $prova4;
 $media = $soma /= 4;

if ($media >=7){
    echo "Aprovado";
}
else {
    echo "Não Aprovado";
}
