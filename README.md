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
Você pode completar esse código em PHP usando um for para verificar se a palavra "curso" está contida dentro da frase, mesmo que ela esteja no meio dela. Para isso, dentro do loop, é preciso extrair pedaços da frase do mesmo tamanho da palavra procurada e compará-los.

Aqui vai o código completo:

<?php

$palavraProcurada = "curso";
$frase = "Escola infoserv de PHP urso.";

$tamanhoPalavra = strlen($palavraProcurada);
$tamanhoFrase = strlen($frase);
$encontrou = false;

for ($i = 0; $i <= $tamanhoFrase - $tamanhoPalavra; $i++) {
    $sub = substr($frase, $i, $tamanhoPalavra);
    if ($sub === $palavraProcurada) {
        $encontrou = true;
        break;
    }
}

if ($encontrou) {
    echo "Palavra encontrada!";
} else {
    echo "Palavra não encontrada.";
}
