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

sudo service mariadb start // subir banco de dados

 sudo mysql -uroot -p

    SHOW DATABASES;

    CREATE DATABASE IF NOT EXISTS info_php_25;

    USE info_php_25;

    CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

    GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

    FLUSH PRIVILEGES;

    SELECT User FROM mysql.user;


    // CRUD(criar,ler,atualizar,excluir) Create,Read,Update,Delete.