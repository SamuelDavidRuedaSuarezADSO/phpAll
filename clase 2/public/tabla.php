<?php
require __DIR__ . "/../clases/aprendiz.php";

$aprendiz = new Aprendiz();

$person = $aprendiz->listar();

?>
<table>
  <thead>
    <th>id</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>genero</th>
    <th>edad</th>
  </thead>
  <tbody>
    <?php
    foreach ($person as $key => $value) {
    ?>
      <tr>
        <td>
          <?php echo $value["id"]; ?>
        </td>
        <td>
          <?php echo $value["nombre"]; ?>
        </td>
        <td>
          <?php echo $value["apellido"]; ?>
        </td>
        <td>
          <?php echo $value["genero"]; ?>
        </td>
        <td>
          <?php echo $value["edad"]; ?>
        </td>
        <td>
          <form action="controladores/controlador.php" method="GET">
            <input type="hidden" value="<?php echo $value["id"] ?>" name="id">
            <button type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>