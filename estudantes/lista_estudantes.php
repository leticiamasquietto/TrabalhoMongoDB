<?php
  require '../conectar.php';
  $estudantes = $banco->estudantes->find();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../cover.css">
  </head>
  <body>
    <div class="container mt-5">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Lista de Estudantes</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="../index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="cadastrar_estudante.php">Cadastrar Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/cadastrar_curso.php">Cadastrar Curso</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/matricular.php">Matricular Estudante</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="lista_estudantes.php">Listar Estudantes</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/lista_cursos.php">Listar Cursos</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/lista_matriculas.php">Listar Matrículas</a>
          </nav>
        </div>
      </header>
      <main class="px-3">
        <table class="table table-bordered">
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
          </tr>
          <?php foreach ($estudantes as $e): ?>
            <tr>
              <td><?= $e['nome'] ?></td>
              <td><?= $e['cpf'] ?></td>
              <td><?= $e['telefone1'] ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </main>
    </div>
  </body>
</html>