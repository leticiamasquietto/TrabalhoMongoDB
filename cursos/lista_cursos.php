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
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2>Lista de Cursos</h2>
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
</div>
</body>
</html>
