# CRUD com Laravel 🐘

Este projeto é um exemplo de um sistema de gerenciamento de livros utilizando o framework Laravel. Ele permite que os usuários cadastrem, editem e excluam livros, além de visualizar a lista de livros existentes.

## Funcionalidades

*   Cadastro de livros com título, páginas, preço e autor
*   Edição de livros existentes
*   Exclusão de livros
*   Visualização da lista de livros

## Tecnologias utilizadas

*   Laravel
*   PHP
*   MySQL
*   Bootstrap
*   CSS

## Arquitetura do projeto

O projeto é dividido em várias pastas e arquivos, cada um com sua responsabilidade específica:

*   `app/Models`: contém os modelos de dados utilizados no projeto, como o modelo de livro.
*   `app/Http/Controllers`: contém os controladores que lidam com as requisições HTTP e retornam respostas.
*   `database/migrations`: contém as migrações de banco de dados que criam as tabelas necessárias para o projeto.
*   `database/seeders`: contém os seeders que populam o banco de dados com dados iniciais.
*   `resources/views`: contém as views que são renderizadas pelo controlador e retornadas ao usuário.
*   `routes/web.php`: contém as rotas que mapeiam as URLs para os controladores.

## Instalação

Para instalar o projeto, siga os passos abaixo:

1.  Clone o repositório utilizando o comando `git clone https://github.com/Guilhermefariah/CRUD_Laravel.git`
2.  Acesse a pasta do projeto utilizando o comando `cd CRUD_Laravel`
3.  Instale as dependências do projeto utilizando o comando `composer install`
4.  Configure o arquivo `.env` com as informações de conexão ao banco de dados
5.  Execute as migrações de banco de dados utilizando o comando `php artisan migrate`
6.  Execute os seeders de banco de dados utilizando o comando `php artisan db:seed`

## Uso

Para utilizar o projeto, acesse a URL `http://localhost:8000` no seu navegador. Você será direcionado para a página de login, onde você pode criar uma conta ou logar com uma conta existente.

Após logar, você será direcionado para a página de lista de livros, onde você pode visualizar a lista de livros existentes, criar novos livros, editar livros existentes e excluir livros.

## Contribuição

Se você deseja contribuir com o projeto, por favor, faça um fork do repositório e envie um pull request com as suas alterações.

## Licença

Este projeto é licenciado sob a licença MIT. Leia o arquivo `LICENSE` para mais informações.