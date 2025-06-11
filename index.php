<?php
// echo "Ola Mundo! <br> ";

// $x = 2 + 2;
// echo $x ;
// echo "<br>";
// $x = 3 + 3;
// echo $x ;
// $x = 2 + 2;
// echo $x ;
// echo "<br>";
// $x = 3 + 3;
// echo $x ;
// const DATA_NASCIMENTO = "26/09/2000"; //snake_case
// $resultatoSoma = 30 + 30;
// $resultatoSoma = 30;
// $resultatoSoma2 = 30;
// $resultatoSoma2 += 30;
// echo $$resultatoSoma; //camelCase
// echo "<br>";
// echo date("d/m/y");

// $valorA = 2;
// $valorB = 4;
// if ($valorA == $valorB){
//     echo "Os numeros são iguail.";
//  } else if ($valorA != $valorB) {
//     echo "Os numeros não são iguail.";
//  } else {
//     echo "Os numeros não são validos";
//  }

// $seuNome = "Fábio";
// $ano = 2000;
// $anoAtual = date("Y");
// $Idade = $anoAtual -= $ano;

// if ($Idade >= 18 ) {
//  echo "$seuNome é maior de idade. <br> Sua idade é $Idade";
     
// }
//  else 
//  { 
//     echo "$seuNome é menor de idade. <br> Sua idade é $Idade";
//  }
// echo "<br>";

//  $prova1 = 8;
//  $prova2 = 7;
//  $prova3 = 6;
//  $prova4 = 9;
//  $soma = $prova1 + $prova2 + $prova3 + $prova4;
//  $media = $soma / 4;
// if ($media >=7){
//     echo "Aprovado";
// }
// else {
//     echo "Não Aprovado";
// }
// echo "<br>";

//  $prova1 = 8;
//  $prova2 = 7;
//  $prova3 = 6;
//  $prova4 = 9;
//  $peso1 = 3;
//  $peso2 = 3;
//  $peso3 = 2;
//  $peso4 = 2;
//  $notapeso = ($prova1 * $peso1 + $prova2 * $peso2 + $prova3 * $peso3 + $prova4 * $peso4) 
//  / ($peso1 + $peso2 + $peso3 + $peso4);
//  if ($notapeso>=7){
//     echo "Aprovado com a nota $notapeso";
// }
// else {
//     echo "Não Aprovado a nota $notapeso";
// }


//  echo "<br>";

//  $prova1 = 8;
//  $prova2 = 7;
//  $prova3 = 6;
//  $prova4 = 9;
//  $quantidade = 4;
//  $inverso = (1/$prova1) + (1/$prova2) + (1/$prova3) + (1/$prova4);
//  $mediaH = $quantidade / $inverso;
// if ($mediaH >=7){
//     echo "Aprovado com a nota $mediaH";
// }
// else {
//     echo "Não Aprovado com a nota $mediaH";
// }
// echo "<br>";

// $numero1 = 4;
// $numero2 = 3;
// $operador = "*";

// if ($operador == "+") {
//     $resultado = $numero1 + $numero2;
//     echo " $numero1 + $numero2 = $resultado" ;
// }
// else if($operador == "-") {
//     $resultado = $numero1 - $numero2;
//     echo " $numero1 - $numero2 = $resultado" ;
// }
// else if($operador == "*") {
//     $resultado = $numero1 * $numero2;
//     echo " $numero1 * $numero2 = $resultado" ;
// }
// else if ($operador == "/") {
//     $resultado = $numero1 / $numero2;
//     echo " $numero1 / $numero2 = $resultado" ;
// } else {
//     echo "ERRO";
// }
// echo "<br>";

// $valorA = 10;
// $valorB = 10;
// $valorC = 10;

// if ($valorA == $valorB && $valorC == $valorA){
//     echo "São iguail";
// }

// else {
//     echo "Não são iguail";
// }
// echo"<br>";

// if ($valorA == $valorB && $valorC == $valorA){
//     echo "Triangulo Equilatero";
// }

// else if (
//  ($valorA == $valorB && $valorA > $valorC)
//   ||( $valorB= $valorC && $valorB > $valorA)
//    ||( $valorA == $valorC && $valorA == $valorB) )
//  {
//     echo "Triangulo isoceles";
//  }
//  else if(
//   ($valorA != $valorB && $valorB != $valorC) &&
//  ($valorA + $valorB > $valorC) )
//  {
//     echo "Triangolo escaleno";
//  }

//  else {
//     echo "Não é triangolo";
//  }

//  echo"<br>";

//  $multiplicador = 5;
//  for ($i = 0; $i <= 10; $i++){
// $resultado = $multiplicador * $i;
// echo "$multiplicador * $i = $resultado" . "<br>";
//  }

//  $i = 0;
//  while ($i <=10){
//     $resultado = $multiplicador * $i;
//     echo "$multiplicador * $i = $resultado" . "<br>";

//     $i++;
//  }

//  $resultado = 10 / 2; 
//  $resultado = 10 % 2;


// // $numero = 10;
// // $resto = $numero % 2;
// // $par = $resto == 0;

// // $contPares = 1; // 0 - 19 || 1 - 20 = 20 pares


// //  for ($i = 2; $contPares <= 20 ; $i++){

// //     if ($i % 2 == 0){
// //         echo "$i" . "<br>";
// //         $contPares++;
// //     }
// //  }


// // echo "<br>";

// // $i = 2;
// // $contPares = 1;
// //  while ($contPares <= 20){

// //     if ($i % 2 == 0){

// //         echo "$i" . "<br>"; 
// //         $contPares++;
// //     }

// //     $i++;
// //  }
 
// echo "<br>";

// $cont = 0;

//  for ($i = 10; $i >= 0 ; $i--){

//         echo "$i" . "<br>";
     
//  }

//  echo "<br>";

//  $contPrimos = 0;

//  for ($numeroAvaliado = 2; $contPrimos < 5; $numeroAvaliado++) {
//      $penultimoNumero = $numeroAvaliado - 1;
//      $ehPrimo = true;

//     for ($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {

//         $resto = $numeroAvaliado % $divisor;
//         $divisaoExata = $resto == 0;

//         if ($divisaoExata && $divisor < $penultimoNumero) {
//             $ehPrimo = false;
//             break; 
//         }
            
//     }

//     if ($ehPrimo) {
//         $contPrimos++;
//         echo "O numero: $numeroAvaliado é primo!<br>";

//     }

//  }
// $primos = [];
// $primos = [2,3,5,7,11]; 
// for ($i = 0; $i < 5 ; $i++) {
//     $primo = $primos[$i];


// }

$primos = [];
$contPrimos = 0;

 for ($numeroAvaliado = 2; $contPrimos < 5; $numeroAvaliado++) {
     $penultimoNumero = $numeroAvaliado - 1;
     $ehPrimo = true;

    for ($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {

        $resto = $numeroAvaliado % $divisor;
        $divisaoExata = $resto == 0;

        if ($divisaoExata && $divisor < $penultimoNumero) {
            $ehPrimo = false;
            break; 
        }
            
    }

    if ($ehPrimo) {
        $primos[] = $numeroAvaliado;
        $contPrimos++;
    }

 }

 for ($i = 0; $i < count($primos) ; $i++) {
    $primo = $primos[$i];
    echo "Numero: $primo" . "<br>";

}


