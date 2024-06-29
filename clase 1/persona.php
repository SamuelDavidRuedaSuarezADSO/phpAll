<?php
class Persona
{
  protected $nombre;
  protected $apellido;
  protected $genero;
  protected $edad;

  public function __construct()
  {
  }
  public function getNombre()
  {
    return strtoupper($this->nombre);
  }
  public function getApellido()
  {
    return strtolower($this->apellido);
  }
  public function getGenero()
  {
    return strtolower($this->genero);
  }
  public function getEdad()
  {
    return strtolower($this->edad);
  }

  public function setNombre($nombre)
  {
    $this->nombre = strtolower($nombre);
  }
  public function setApellido($apellido)
  {
    $this->apellido = strtolower($apellido);
  }
  public function setGenero($genero)
  {
    $this->genero = strtolower($genero);
  }
  public function setEdad($edad)
  {
    $this->edad = strtolower($edad);
  }

  //metodos
  public function Guardar()
  {
    echo "Se guadaron en la base de datos " . $this->nombre . " " . $this->apellido . " " . $this->genero . " " . $this->edad;
  }
}
