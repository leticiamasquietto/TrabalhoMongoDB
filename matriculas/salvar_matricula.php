<?php
  require '../conectar.php';

  use MongoDB\BSON\ObjectId;

  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: lista_matriculas.php');
    exit;
  }

  $student_id = $_POST['student_id'] ?? '';
  $course_id = $_POST['course_id'] ?? '';
  $data_matricula = $_POST['data_matricula'] ?? date('Y-m-d');

  if (empty($student_id) || empty($course_id)) {
    echo "Estudante e curso são obrigatórios.";
    exit;
  }

  try {
    $doc = [
      'student_id' => new ObjectId($student_id),
      'course_id' => new ObjectId($course_id),
      'data_matricula' => new MongoDB\BSON\UTCDateTime((new DateTime($data_matricula))->getTimestamp()*1000),
      'status' => 'matriculado'
    ];

    $existe = $banco->matriculas->findOne([
      'student_id' => $doc['student_id'],
      'course_id' => $doc['course_id']
    ]);
    if ($existe) {
      header('Location: lista_matriculas.php');
      exit;
    }

    $banco->matriculas->insertOne($doc);
    header('Location: lista_matriculas.php');
  } catch (Exception $e) {
    echo "Erro ao salvar matrícula: " . $e->getMessage();
  }