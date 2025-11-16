<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Cadastrar Estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../cover.css">
  </head>
  <body>
    <div class="container mt-5">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Cadastrar Estudante</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="../index.php">Home</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="cadastrar_estudante.php">Cadastrar Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/cadastrar_curso.php">Cadastrar Curso</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/matricular.php">Matricular Estudante</a>
            <a class="nav-link fw-bold py-1 px-0" href="lista_estudantes.php">Listar Estudantes</a>
            <a class="nav-link fw-bold py-1 px-0" href="../cursos/lista_cursos.php">Listar Cursos</a>
            <a class="nav-link fw-bold py-1 px-0" href="../matriculas/lista_matriculas.php">Listar Matrículas</a>
          </nav>
        </div>
      </header>
      <main class="px-3">
        <form method="post" action="salvar_estudante.php">
          <input class="form-control mb-2" type="text" name="nome" placeholder="Nome" required>
          <input class="form-control mb-2" type="text" name="rg" placeholder="RG" required>
          <input class="form-control mb-2" type="text" name="cpf" placeholder="CPF" required>
          <input class="form-control mb-2" type="date" name="data_nascimento" required>
          <input class="form-control mb-2" type="text" name="telefone1" placeholder="Telefone 1" required>
          <input class="form-control mb-2" type="text" name="telefone2" placeholder="Telefone 2">
          <input class="form-control mb-2" type="text" name="nome_mae" placeholder="Nome da mãe" required>
          <input class="form-control mb-2" type="text" name="nome_pai" placeholder="Nome do pai">

          <h4 style="text-align: left;">Endereço</h4>
          <input class="form-control mb-2" type="text" name="rua" placeholder="Rua" required>
          <input class="form-control mb-2" type="text" name="numero" placeholder="Número" required>
          <input class="form-control mb-2" type="text" name="bairro" placeholder="Bairro" required>
          <input class="form-control mb-2" type="text" name="cidade" placeholder="Cidade" required>
          <input class="form-control mb-2" type="text" name="cep" placeholder="CEP" required>

          <button class="btn btn-dark">Salvar</button>
        </form>
      </main>
    </div>
  </body>
</html>
