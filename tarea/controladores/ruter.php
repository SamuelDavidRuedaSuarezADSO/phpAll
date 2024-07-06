<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    require __DIR__ ."/controlador.php";

    $ctrPersona = new ControladorPersona();

    if(isset($_POST['id'])){
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero   = $_POST['genero'];
        $edad     = $_POST['edad'];
        $id     = $_POST['id'];
        $ctrPersona=  $ctrPersona->modificar($id, $nombre, $apellido, $genero, $edad);
        header("location: /phpAll/tarea/index.php");
    }else{
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $genero   = $_POST['genero'];
        $edad     = $_POST['edad'];

        $persona = $ctrPersona->guardar($nombre, $apellido, $genero, $edad);
        require __DIR__ . "/../public/actualizar.php";
    }

}