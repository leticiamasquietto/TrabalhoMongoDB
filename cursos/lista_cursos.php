<?php
  require '../conectar.php';
  $cursos = $banco->cursos->find();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Lista de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../cover.css">
  </head>
  <body>
    <div class="container mt-5">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Lista de Cursos</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="../index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/cadastrar_estudante.php">Cadastrar Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="cadastrar_curso.php">Cadastrar Curso</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/matricular.php">Matricular Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/lista_estudantes.php">Listar Estudantes</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="lista_cursos.php">Listar Cursos</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/lista_matriculas.php">Listar Matrículas</a>
          </nav>
        </div>
      </header>
      <main class="px-3">
        <table class="table table-bordered">
          <tr>
            <th>Nome</th>
            <th>Código</th>
            <th>Descrição</th>
            <th>Duração</th>
            <th>Modalidade</th>
          </tr>
          <?php foreach ($cursos as $c): ?>
            <tr>
              <td><?= $c['nome'] ?></td>
              <td><?= $c['codigo'] ?></td>
              <td><?= $c['descricao'] ?></td>
              <td><?= $c['duracao'] ?></td>
              <td><?= $c['modalidade'] ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </main>
    </div>
  </body>
</html>