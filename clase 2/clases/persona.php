<?php
require __DIR__ . '/../libs/database.php';
class Persona
{
  protected $nombre;
  protected $apellido;
  protected $genero;
  protected $edad;
  protected $id;

  protected $db;
  protected $connection;

  public function __construct()
  {
    $this->db = new Database();
    $this->connection   = $this->db->getConnection();
  }

  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellido()
  {
    return $this->apellido;
  }
  public function getGenero()
  {
    return $this->genero;
  }
  public function getEdad()
  {
    return $this->edad;
  }

  public function setId($id)
  {
    $this->id = $id;
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
    $this->edad = $edad;
  }

  // Metodos
  public function Guardar()
  {
    $sql = "INSERT INTO aprendiz(nombre, apellido, genero, edad) VALUES (:nombre, :apellido, :genero, :edad)";
    $stm = $this->connection->prepare($sql);
    $stm->bindParam(':nombre', $this->nombre);
    $stm->bindParam(':apellido', $this->apellido);
    $stm->bindParam(':genero', $this->genero);
    $stm->bindParam(':edad', $this->edad);
    $stm->execute();
  }

  public function listar()
  {
    $sql = "SELECT * FROM aprendiz";
    $stm = $this->connection->prepare($sql);
    $stm->execute();

    return $stm->fetchAll();
  }

  public function eliminar()
  {
    $sql = "DELETE FROM aprendiz where id = :id";
    $stm = $this->connection->prepare($sql);
    $stm->bindParam(':id', $this->id);
    $stm->execute();
  }
}
