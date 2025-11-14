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
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2>Lista de Estudantes</h2>
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
</div>
</body>
</html>
