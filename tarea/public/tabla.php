<?php
require __DIR__ . "/../clases/aprendiz.php";

$aprendiz = new Aprendiz();

$person = $aprendiz->listar();

?>
<table class="tablaSec">
  <thead>
    <tr class="tablaH">
      <th class="tablaT">Id</th>
      <th class="tablaT">Nombre</th>
      <th class="tablaT">Apellido</th>
      <th class="tablaT">Genero</th>
      <th class="tablaT">Edad</th>
      <th class="tablaT">Eliminar</th>
      <th class="tablaT">Modificar</th>
    </tr>
  </thead>
  <tbody class="tablaB">
    <?php
    foreach ($person as $key => $value) {
    ?>
    <tr class="tablaH">
      <td class="tablaPart">
        <?php echo $value["id"]; ?>
      </td>
      <td class="tablaPart">
        <?php echo $value["nombre"]; ?>
      </td>
      <td class="tablaPart">
        <?php echo $value["apellido"]; ?>
      </td>
      <td class="tablaPart">
        <?php echo $value["genero"]; ?>
      </td>
      <td class="tablaPart">
        <?php echo $value["edad"]; ?>
      </td>
      <td class="tablaPart">
        <form action="controladores/controlador.php" method="GET" class="formT">
          <input type="hidden" value="<?php echo $value["id"] ?>" name="id" class="inputInvi">
          <button type="submit" class="tablaModi">Eliminar</button>
        </form>
      </td>
      <td class="tablaPart">
        <form action="controladores/controladorModi.php" method="get" class="formT">
          <input type="hidden" value="<?php ?>" name="modi" class="inputInvi">
          <button type="submit" class="tablaModi">Modficar</button>
        </form>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>