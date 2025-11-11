<?php
require '../conectar.php';

$curso = [
  'nome' => $_POST['nome'],
  'codigo' => $_POST['codigo'],
  'descricao' => $_POST['descricao'],
  'duracao' => $_POST['duracao'],
  'modalidade' => $_POST['modalidade']
];

$banco->cursos->insertOne($curso);
header('Location: lista_cursos.php');
