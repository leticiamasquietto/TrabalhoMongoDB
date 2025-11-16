<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Cadastrar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../cover.css">
  </head>
  <body>
    <div class="container mt-5">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Cadastrar Curso</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="../index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/cadastrar_estudante.php">Cadastrar Estudante</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="cadastrar_curso.php">Cadastrar Curso</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/matricular.php">Matricular Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/lista_estudantes.php">Listar Estudantes</a>
            <a class="nav-link fw-bold py-1 px-0" href="lista_cursos.php">Listar Cursos</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/lista_matriculas.php">Listar Matrículas</a>
          </nav>
        </div>
      </header>
      <main class="px-3">
        <form method="post" action="salvar_curso.php">
          <input class="form-control mb-2" type="text" name="nome" placeholder="Nome do curso" required>
          <input class="form-control mb-2" type="text" name="codigo" placeholder="Código" required>
          <input class="form-control mb-2" type="text" name="descricao" placeholder="Descrição" required>
          <input class="form-control mb-2" type="text" name="duracao" placeholder="Duração" required>
          <input class="form-control mb-2" type="text" name="modalidade" placeholder="Modalidade" required>
          <button class="btn btn-dark">Salvar</button>
        </form>
      </main>
    </div>
  </body>
</html>