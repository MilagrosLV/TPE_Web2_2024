

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <base href="<?= BASE_URL ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<form action="agregar" method="POST" class="mb-3">
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" name="precio" required>
  </div>
  <div class="mb-3 form-check">
    <label for="categoria" class="form-label">Categorias</label>
    <select name="categoria" id="categoria" class="form-control" required>
        <option value="limpieza">Limpieza</option> <!-- Opción por defecto -->
        <option value="lacteos">Lacteos</option>
        <option value="carnes">Carnes</option>
        <option value="verduras">Verduras</option>
        <option value="harinas">Harinas</option>
        <option value="sinTAC">Sin TAC</option>


    <input type="number" name="idUsuario" id="idUsuario" value="">
  </div>
  <button type="submit" name="accion" value="subir">Subir</button>
  <button type="submit" name="accion" value="modificar">Modificar</button>
</form>

