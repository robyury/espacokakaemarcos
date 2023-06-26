<p align="center"><img src="public/assets/images/logo.png" width="150" alt="Logo"></p>

## Sobre o site

Este site foi feito para o espaço Kaká e Marcos, conforme solicitado previamente. O projeto está sendo criado no github para que possam ser feitas manutenções ou eventuais adições de conteúdo ao site. Este projeto se manterá privado, tendo acesso a ele apenas os associados ao mesmo.

A base do site foi feita em Laravel, e utiliza MySQL para a conexão com o banco de dados. Devido a população prévia de dados, um backup será enviado para o uso ao invés do método padrão de executar a Migration do banco de dados.


## Requisitos

Segue abaixo os componentes necessários para o uso do Laravel:

- MySQL;
- Um servidor web de sua escolha;
- **[Composer](https://getcomposer.org/)**;
- **[NodeJS](https://nodejs.org/en/download)**;

## Como Instalar

O processo deve iniciar através da instalação do servidor web e do MySQL. Deve ser configurado um usuário e senha com permissão no banco de dados, ou uma senha no usuário root deve ser configurada (menos seguro).

Feito isso, deve-se instalar o Composer e o NodeJS. Após a instalação de ambos, obtenha o repositório no diretório de hospedagem do website.

Após obter o repositório, execute no MySQL o script localizado na pasta ```/database/backups``` com a data mais recente. Ele será responsável por criar o banco de dados e o popular com os dados da última atualização.
```shell
composer install
```

Após o término da instalação da aplicação, copie o arquivo ```.env.example``` e renomeie a cópia apenas para ```.env```
.

Abra o arquivo .env com um editor de texto, e edite as seguintes linhas:

```dotenv
APP_NAME=kakaemarcos
APP_ENV=production
APP_DEBUG=false
APP_URL=<link do site aqui>

DB_CONNECTION=mysql
DB_HOST=<IP do MySQL>
DB_PORT=3306 <trocar se a porta do MySQL for outra>
DB_DATABASE=kakaemarcos
DB_USERNAME=<login do MySQL>
DB_PASSWORD=<Senha do MySQL>
```

Após isso, basta rodar o comando 
```shell
php artisan key:generate
```

E a aplicação estará pronta para uso.

