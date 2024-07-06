<?php
require_once("../clases/aprendiz.php");
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

  $nombre   = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $genero   = $_POST['genero'];
  $edad     = $_POST['edad'];

  $aprendiz = new Aprendiz();
  $aprendiz->setNombre($nombre);
  $aprendiz->setApellido($apellido);
  $aprendiz->setGenero($genero);
  $aprendiz->setEdad($edad);

  $aprendiz->Guardar();


  header('location: /phpAll/tarea/index.php');
}

else if ($_SERVER["REQUEST_METHOD"] === 'GET') {
  $id = $_GET['id'];
  $aprendiz = new Aprendiz();
  $aprendiz->setId($id);
  $aprendiz->eliminar();

  header('location: /phpAll/tarea/index.php');
}