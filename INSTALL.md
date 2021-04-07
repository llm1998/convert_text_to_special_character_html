# English [en_US]

First step: The command must be executed
$ sudo composer install

Second step: The command must be executed
$ cp .env.example .env

Third step: The command must be executed
$ php -r "echo 'base64:'.base64_encode(uniqid()).\"\n\";"

Take the text that appeared in the terminal and put it in the .env file, placing it in the parameter`APP_KEY`.

Fourth step: Configure with the information needed for the application to work

Five Step: You must execute the command below to create the application tables
$ php artisan migrate

Sixth Step: You must execute the command below to populate the tablesYou must execute the command below to populate the tables
$ php artisan db:seed

# Português [pt_BR]

Primeiro Passo: Deve ser Executado o comando
$ sudo composer install

Segundo Passo: Deve executar o comando
$ cp .env.example .env

Terçeiro Passo: Deve executar o comando
$ php -r "echo 'base64:'.base64_encode(uniqid()).\"\n\";"

Pegar o texto que apareceu no terminal e colocar no arquivo .env colocando no parâmetro `APP_KEY`.

Quarto Passo: Configure com as informações necessárias para o aplicativo funcionar 

Quinto Passo: Deve executar o comando abaixo para criar as tabelas da aplicação
$ php artisan migrate

Sexto Passo: Deve executar o comando abaixo para popular as tabelas
$ php artisan db:seed