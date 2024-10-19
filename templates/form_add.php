<?php require './header.php';  ?> 

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
        </select>
      <input type="number" name="idUsuario" id="idUsuario" value="">
    </div>
    <button type="submit" name="accion" value="add">Subir</button>
    <button type="submit" name="accion" value="update">Modificar</button>
</form>

<?php require './footer.php';  ?> 