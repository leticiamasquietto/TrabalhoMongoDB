# Trabalho MongoDB – Sistema PHP com Conexão ao MongoDB

Este projeto demonstra como integrar uma aplicação PHP ao banco de dados MongoDB, permitindo o cadastro e listagem de dados de forma simples.
O objetivo é apresentar os conceitos básicos de conexão, inserção e leitura utilizando a biblioteca oficial mongodb/mongodb.

## Estrutura do Projeto

TrabalhoMongoDB/
- cursos/
	- cadastrar_curso.php - Página que exibe formulário para cadastro de cursos;
	- lista_cursos.php - Página que exibe uma lista de todos os cursos cadastrados;
	- salvar_cursos.php - Faz o cadastro no banco de dados dos dados no formulário da página cadastrar_curso.php;
- estudantes/
	- cadastrar_estudante.php - Página que exibe o formulário para cadastro de estudantes;
	- lista_estudantes.php - Página que exibe uma lista de todos os alunos cadastrados;
	- salvar_estudante.php - Faz o cadastro no banco de dados dos dados no formulário da página cadastrar_estudante.php;
- matriculas/
	- matricular.php - Página que exibe o formulário para realizar a conexão entre estudantes e cursos;
	- lista_matriculas.php - Página que exibe as relações entre estudantes e cursos;
	- salvar_matricula.php - Faz o cadastro no banco de dados da matrícula dos alunos;
- vendor/ - Diretório criado pelo Composer (bibliotecas);
- composer.json - Arquivo de configuração do Composer;
- conectar.php - Cria o banco de dados;
- cover.css - Arquivo de estilo aplicado a todas as páginas;
- index.php - Página inicial do projeto;
- README.md - Arquivo com explicações e estrutura do projeto.

## Pré-requisitos

Para rodar o projeto você precisa ter instalado:
- PHP 8.x;
- Composer;
- MongoDB Community Server;
- Extensão mongodb habilitada no PHP (php_mongodb.dll ou equivalente);
- Servidor Apache (utilizamos o XAMPP).

## Criadoras do Projeto

O projeto foi criado por duas estudantes do quarto período do curso de Sistemas de Informação, como trabalho para a matéria de Desenvolvimento de Aplicações para Web I:
- Agda Beatriz Jedliczka Domingues - RA 60000631;
- Letícia Masquietto de Oliveira Silva - RA 60300765.

## Se você leu até aqui, obrigada pela atenção!