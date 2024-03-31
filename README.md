# Loja Virtual

Este é um projeto de uma loja virtual que estou criando para testar e demonstrar minhas habilidades de programação. Este projeto é construído usando Laravel e Docker.

## Sobre o Projeto

Este projeto é uma loja virtual completa, com funcionalidades de catálogo de produtos, carrinho de compras, checkout e gerenciamento de usuários.

## Como Instalar

### Usando Docker

1. Clone este repositório para a sua máquina local.
2. Navegue até o diretório do projeto.
3. Copie o arquivo `.env.example` para um novo arquivo chamado `.env` e preencha as informações do banco de dados.
4. Execute `docker-compose up -d` para iniciar os containers do Docker.
5. Execute `docker-compose exec app php artisan key:generate` para gerar uma chave de aplicação.
6. Execute `docker-compose exec app php artisan migrate` para criar as tabelas do banco de dados.

### Sem Docker

Se você preferir não usar Docker, você pode seguir estas instruções:

1. Clone este repositório para a sua máquina local.
2. Navegue até o diretório do projeto e execute `composer install` para instalar as dependências do projeto.
3. Copie o arquivo `.env.example` para um novo arquivo chamado `.env` e preencha as informações do banco de dados.
4. Execute `php artisan key:generate` para gerar uma chave de aplicação.
5. Execute `php artisan migrate` para criar as tabelas do banco de dados.
6. Execute `php artisan serve` para iniciar o servidor de desenvolvimento.

## Contribuições

Contribuições são bem-vindas! Por favor, leia as diretrizes de contribuição antes de enviar um pull request.

## Licença

Este projeto está licenciado sob a Licença MIT.
