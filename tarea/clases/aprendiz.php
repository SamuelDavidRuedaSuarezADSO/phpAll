<?php
require __DIR__ . "/../clases/persona.php";

class Aprendiz extends Persona
{

  protected $db;
  protected $conection;

  public function __construct()
  {
    parent::__construct();
  }
}
