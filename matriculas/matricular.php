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
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2>Matricular Estudante</h2>
  <form method="post" action="salvar_matricula.php">
    <div class="mb-3">
      <label for="student" class="form-label">Estudante</label>
      <select id="student" name="student_id" class="form-select" required>
        <option value="">-- selecione --</option>
        <?php foreach ($estudantes as $s): ?>
          <option value="<?= $s['_id'] ?>"><?= htmlspecialchars($s['nome']) ?> (CPF: <?= htmlspecialchars($s['cpf']) ?>)</option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="course" class="form-label">Curso</label>
      <select id="course" name="course_id" class="form-select" required>
        <option value="">-- selecione --</option>
        <?php foreach ($cursos as $c): ?>
          <option value="<?= $c['_id'] ?>"><?= htmlspecialchars($c['nome']) ?> (Código: <?= htmlspecialchars($c['codigo']) ?>)</option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Data de matrícula</label>
      <input type="date" name="data_matricula" class="form-control" value="<?= date('Y-m-d') ?>" required>
    </div>

    <button class="btn btn-primary">Matricular</button>
  </form>
</div>
</body>
</html>
