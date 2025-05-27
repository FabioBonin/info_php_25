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
echo "<br>";

 $prova1 = 8;
 $prova2 = 7;
 $prova3 = 6;
 $prova4 = 9;
 $peso1 = 3;
 $peso2 = 3;
 $peso3 = 2;
 $peso4 = 2;
 $notapeso = ($prova1 * $peso1 + $prova2 * $peso2 + $prova3 * $peso3 + $prova4 * $peso4) 
 / ($peso1 + $peso2 + $peso3 + $peso4);
 if ($notapeso>=7){
    echo "Aprovado com a nota $notapeso";
}
else {
    echo "Não Aprovado a nota $notapeso";
}


 echo "<br>";

 $prova1 = 8;
 $prova2 = 7;
 $prova3 = 6;
 $prova4 = 9;
 $numero = 4;
 $inverso = (1/$prova1) + (1/$prova2) + (1/$prova3) + (1/$prova4);
 $media = $numero / $inverso;
if ($media >=7){
    echo "Aprovado com a nota $media";
}
else {
    echo "Não Aprovado com a nota $media";
}
echo "<br>";


