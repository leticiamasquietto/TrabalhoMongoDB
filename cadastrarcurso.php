<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Curso</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2>Cadastrar Curso</h2>
  <form method="post" action="salvar_curso.php">
    <input class="form-control mb-2" type="text" name="nome" placeholder="Nome do curso" required>
    <input class="form-control mb-2" type="text" name="codigo" placeholder="Código" required>
    <input class="form-control mb-2" type="text" name="descricao" placeholder="Descrição" required>
    <input class="form-control mb-2" type="text" name="duracao" placeholder="Duração" required>
    <input class="form-control mb-2" type="text" name="modalidade" placeholder="Modalidade" required>
    <button class="btn btn-success">Salvar</button>
  </form>
</div>
</body>
</html>
