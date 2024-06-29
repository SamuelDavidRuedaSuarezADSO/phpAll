<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <form action="controlador.php" method="get">
    <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre">
    </div>
    <div>
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido">
    </div>
    <div>
      <label for="genero">Genero:</label>
      <input type="radio" id="genero_masculino" name="genero" value="Masculino">
      <label for="genero_masculino">Masculino</label>

      <input type="radio" id="genero_femenino" name="genero" value="Femenino">
      <label for="genero_femenino">Femenino</label>
    </div>
    <div>
      <label for="edad">Edad:</label>
      <input type="number" id="edad" name="edad">
    </div>
    <button type="submit">Enviar</button>
  </form>

</body>

</html>