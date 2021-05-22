# Nome do Ativo
* SISBCPF API PHP

# Tecnologia
* PHP 7.2
* Composer
* Apache 2
* Docker

# Categoria
* API

# Instalação
Configuração do virtual host no apache: 

*  __1 Configuração do hosts__

```
<VirtualHost *:80>
	#ServerName www.example.com
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/api/public
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
	<Directory /var/www/api/public>
		AllowOverride All
		Allow from all
	</Directory>
	AddDefaultCharset UTF-8
	DirectoryIndex index.php
	ServerSignature On
</VirtualHost>
```
Deploy da aplicação na pasta  _/var/www/api_

Para ambientes de desenvolvimento pode-se utilizar o docker para disponibilizar a aplicação, para isso é necessário que se tenha o docker e o docker compose instalado e executar o seguinte comando no root da aplicação.

```
sudo docker-compose up -d 
```
* __2 Configuração da base de dados__

Para configuração dos dados de apontamento do banco de dados o seguinte aquivo deve ser editado  _api/.env.php_  na sessão ou na sessão _environment_ do arquivo _docker-compose.yml_ caso esteja usando docker 

```
DATABASE_URL=~
DATABASE_DRIVER='pdo_pgsql'
DATABASE_HOST='<IP ou Host da aplicação>'
DATABASE_PORT='<Porta>'
DATABASE_NAME='<Nome do Banco de Dados>'
DATABASE_USER='<Usuario do Banco de Dados>'
DATABASE_PASSWORD='<Senha do Banco de dados>'
```
# Observações
A documentação da API estrá disponível no link **[host]/api/doc**, onde o **[host]** será o dns configurado para a plicação.
