<?php

if ($_SERVER["REQUEST_METHOD"] === "GET") {

  require_once("aprendiz.php");

  $aprendiz = new Aprendiz();

  if (!empty($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $aprendiz->setNombre($nombre);
    if (!empty($_GET['apellido'])) {
      $apellido = $_GET['apellido'];
      $aprendiz->setApellido($apellido);
      if (!empty($_GET["genero"]) && $_GET["genero"] == "Masculino" || $_GET["genero"] == "Femenino") {
        $genero = $_GET['genero'];
        $aprendiz->setGenero($_GET["genero"]);
        if (!empty($_GET['edad'])) {
          $edad = $_GET['edad'];
          $aprendiz->setEdad($edad);
          $aprendiz->Guardar();
        } else {
          echo "Error: ingresa un edad";
        }
      }
    } else {
      echo "Error: ingrese un apellido";
    }
  } else {
    echo "Error: ingresa un nombre";
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  echo "es post";
}
