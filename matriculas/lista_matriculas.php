<?php
  require '../conectar.php';

  $pipeline = [
    ['$lookup' => [
        'from' => 'estudantes',
        'localField' => 'student_id',
        'foreignField' => '_id',
        'as' => 'estudante'
    ]],
    ['$unwind' => ['path' => '$estudante', 'preserveNullAndEmptyArrays' => true]],
    ['$lookup' => [
        'from' => 'cursos',
        'localField' => 'course_id',
        'foreignField' => '_id',
        'as' => 'curso'
    ]],
    ['$unwind' => ['path' => '$curso', 'preserveNullAndEmptyArrays' => true]],
    ['$sort' => ['data_matricula' => -1]]
  ];

  $matriculas = $banco->matriculas->aggregate($pipeline);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Lista de Matrículas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../cover.css">
  </head>
  <body>
    <div class="container mt-5">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Lista de Matrículas</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="../index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/cadastrar_estudante.php">Cadastrar Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/cadastrar_curso.php">Cadastrar Curso</a>
            <a class="nav-link fw-bold py-1 px-0" href="matricular.php">Matricular Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/lista_estudantes.php">Listar Estudantes</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/lista_cursos.php">Listar Cursos</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="lista_matriculas.php">Listar Matrículas</a>
          </nav>
        </div>
      </header>
      <main class="px-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Estudante</th>
              <th>Curso</th>
              <th>Data</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($matriculas as $m): ?>
              <tr>
                <td><?= isset($m['estudante']['nome']) ? htmlspecialchars($m['estudante']['nome']) : '—' ?></td>
                <td><?= isset($m['curso']['nome']) ? htmlspecialchars($m['curso']['nome']) : '—' ?></td>
                <td><?= isset($m['data_matricula']) ? date('Y-m-d', $m['data_matricula']->toDateTime()->getTimestamp()) : '—' ?></td>
                <td><?= htmlspecialchars($m['status'] ?? '') ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </main>
    </div>
  </body>
</html>
