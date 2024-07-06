<form action="../controladores/ruter.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $persona["id"]; ?>">
    <div class="part">
        <labal class="label" for="nombre" >Nombre:</labal>
        <input type="text" name="nombre" id="nombre" class="input" value="<?php echo $persona["nombre"];?>">
    </div>
    <div class="part">
        <labal class="label" for="apellido">Apellido:</labal>
        <input type="text" name="apellido" id="apellido" class="input" value="<?php echo $persona["apellido"];?>">
    </div>
    <div class="part">
        <label for="genero" class="genero">Genero:</label>
        <input type="text" name="genero" id="genero" class="input" value="<?php echo $persona["genero"];?>">
    </div>
    <div class="part">
        <labal class="label" for="edad">Edad:</labal>
        <input type="text" name="edad" id="edad" class="input" value="<?php echo $persona["edad"];?>">
    </div>
    <button type="submit">Modificar</button>
</form>