Após docker-compose de pé rodar o comando:

docker-compose exec php docker-php-ext-install mysqli

para o php aceitar a conexão é necessário rodar esse comando no mysql

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
