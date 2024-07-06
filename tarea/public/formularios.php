<div class="formSec">
  <form action="controladores/ruter.php" method="POST" class="form">
    <div class="formPart">
      <label for="nombre" class="label">Nombre:</label>
      <input type="text" id="nombre" name="nombre" class="input">
    </div>
    <div class="formPart">
      <label for="apellido" class="label">Apellido:</label>
      <input type="text" id="apellido" name="apellido" class="input">
    </div>
    <div class="formPart">
      <label for="genero" class="label">Genero:</label>
      <input type="radio" id="genero_masculino" name="genero" value="Masculino">
      <label for="genero_masculino" class="label">Masculino</label>

      <input type="radio" id="genero_femenino" name="genero" value="Femenino">
      <label for="genero_femenino" class="label">Femenino</label>
    </div>
    <div class="formPart">
      <label for="edad" class="label">Edad:</label>
      <input type="number" id="edad" name="edad" class="input">
    </div>
    <button type="submit" class="boton">Guardar</button>
  </form>
</div>