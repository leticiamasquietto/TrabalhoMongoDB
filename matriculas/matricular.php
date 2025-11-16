<?php
  require '../conectar.php';

  $estudantes = $banco->estudantes->find([], ['sort'=>['nome'=>1]]);
  $cursos = $banco->cursos->find([], ['sort'=>['nome'=>1]]);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Matricular estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../cover.css">
  </head>
  <body>
    <div class="container mt-5">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Matricular Estudante</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="../index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/cadastrar_estudante.php">Cadastrar Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/cadastrar_curso.php">Cadastrar Curso</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="matricular.php">Matricular Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../estudantes/lista_estudantes.php">Listar Estudantes</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/lista_cursos.php">Listar Cursos</a>
            <a class="nav-link fw-bold py-1 px-0" href="lista_matriculas.php">Listar Matrículas</a>
          </nav>
        </div>
      </header>
      <main class="px-3">
        <form method="post" action="salvar_matricula.php">
          <div class="mb-3">
            <h4 style="text-align: left;">Estudante</h4>
            <select id="student" name="student_id" class="form-select" required>
              <option value="">-- selecione --</option>
              <?php foreach ($estudantes as $s): ?>
                <option value="<?= $s['_id'] ?>"><?= htmlspecialchars($s['nome']) ?> (CPF: <?= htmlspecialchars($s['cpf']) ?>)</option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <h4 style="text-align: left;">Curso</h4>
            <select id="course" name="course_id" class="form-select" required>
              <option value="">-- selecione --</option>
              <?php foreach ($cursos as $c): ?>
                <option value="<?= $c['_id'] ?>"><?= htmlspecialchars($c['nome']) ?> (Código: <?= htmlspecialchars($c['codigo']) ?>)</option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <h4 style="text-align: left;">Data de matrícula</h4>
            <input type="date" name="data_matricula" class="form-control" value="<?= date('Y-m-d') ?>" required>
          </div>

          <button class="btn btn-dark">Salvar</button>
        </form>
      </main>
    </div>
  </body>
</html>