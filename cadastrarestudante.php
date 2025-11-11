<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Estudante</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2>Cadastrar Estudante</h2>
  <form method="post" action="salvar_estudante.php">
    <input class="form-control mb-2" type="text" name="nome" placeholder="Nome" required>
    <input class="form-control mb-2" type="text" name="rg" placeholder="RG" required>
    <input class="form-control mb-2" type="text" name="cpf" placeholder="CPF" required>
    <input class="form-control mb-2" type="date" name="data_nascimento" required>
    <input class="form-control mb-2" type="text" name="telefone1" placeholder="Telefone 1" required>
    <input class="form-control mb-2" type="text" name="telefone2" placeholder="Telefone 2">
    <input class="form-control mb-2" type="text" name="nome_mae" placeholder="Nome da mãe" required>
    <input class="form-control mb-2" type="text" name="nome_pai" placeholder="Nome do pai">

    <h4>Endereço</h4>
    <input class="form-control mb-2" type="text" name="rua" placeholder="Rua" required>
    <input class="form-control mb-2" type="text" name="numero" placeholder="Número" required>
    <input class="form-control mb-2" type="text" name="bairro" placeholder="Bairro" required>
    <input class="form-control mb-2" type="text" name="cidade" placeholder="Cidade" required>
    <input class="form-control mb-2" type="text" name="cep" placeholder="CEP" required>

    <button class="btn btn-primary">Salvar</button>
  </form>
</div>
</body>
</html>
