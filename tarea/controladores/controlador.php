<?php
require __DIR__ ."/../clases/aprendiz.php";
if ($_SERVER["REQUEST_METHOD"] === 'GET') {
  $id = $_GET['id'];
  $aprendiz = new Aprendiz();
  $aprendiz->setId($id);
  $aprendiz->Eliminar();

  header('location: /phpAll/tarea/index.php');
}

class ControladorPersona
{
  public function guardar($nombre, $apellido, $genero, $edad){
    $aprendiz = new Aprendiz();
    $aprendiz->setNombre($nombre);
    $aprendiz->setApellido($apellido);
    $aprendiz->setGenero($genero);
    $aprendiz->setEdad($edad);
    $id = $aprendiz->Guardar();
    $tabla = "aprendiz";
    
    
    $datos = $aprendiz->GetPersonById($tabla, $id);
    return $datos;
    }

  public function modificar($id, $nombre, $apellido, $genero, $edad){
    $aprendiz = new Aprendiz();
    $aprendiz->setId($id);
    $aprendiz->setNombre($nombre);
    $aprendiz->setApellido($apellido);
    $aprendiz->setGenero($genero);
    $aprendiz->setEdad($edad);
    $tabla = "aprendiz";
    $data = $aprendiz->Modificar($tabla);
    return $data;

  }
}