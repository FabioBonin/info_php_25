sufabrir vscode
ver se esta logado do ubuntu
file open folder; selecionar tudo e apagar 
- /var/www/html e da um ok
terminal novo terminal 
- git clone LINL-GITHUB da um enter
file open folder; seleciona tudo e apaga 
- /var/www/html/info/_php//-25 e da um ok
terminal novo terminal
verificar se esta em; /var/www/html/info_php_25
sudo service apache2 start ( para liberar o localhost)
git add .
git commit -m "testo" 
git push
como corrigir esse erro fatal: destination path 'info_php_25' already exists and is not an empty directory
rm -rf info_php_25
Para ordenar arrays em ordem decrescente (maior para menor) usando apenas for, sem nenhuma função do PHP como sort() ou rsort(), você pode usar o método de ordenação bubble sort manualmente.


---

✅ Código completo:

<?php
$alfa = ["A", "B", "C", "D", "E"];
$numeros = [10, 20, 30, 40, 50];

// Ordenar $alfa em ordem decrescente (Z até A)
for ($i = 0; $i < count($alfa); $i++) {
    for ($j = $i + 1; $j < count($alfa); $j++) {
        if ($alfa[$i] < $alfa[$j]) {
            $temp = $alfa[$i];
            $alfa[$i] = $alfa[$j];
            $alfa[$j] = $temp;
        }
    }
}

// Ordenar $numeros em ordem decrescente (maior para menor)
for ($i = 0; $i < count($numeros); $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] < $numeros[$j]) {
            $temp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $temp;
        }
    }
}

// Exibir resultado
echo "Alfabeto: ";
for ($i = 0; $i < count($alfa); $i++) {
    echo $alfa[$i];
    if ($i < count($alfa) - 1) echo ", ";
}

echo "\nNúmeros: ";
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i];
    if ($i < count($numeros) - 1) echo ", ";
}












