<?php
global $title;
$title="Nuevo Usuario";
include "../header.php";

?>

<div id="contenido">
	<h2>Agregar Usuario</h2>

	<form id="formNewUser">
  	<div class="form-row">
    	<div class="form-group col-md-4">
      	<label for="inputName">Nombre</label>
      	<input type="text" class="form-control" id="inputName" placeholder="Nombre" required>
    	</div>
    	<div class="form-group col-md-4">
      	<label for="inputApellidoP">Apellido Paterno</label>
     	 <input type="text" class="form-control" id="inputApellidoP" placeholder="Apellido Paterno" required>
    	</div>
    	<div class="form-group col-md-4">
      	<label for="inputApellidoM">Apellido Materno</label>
      	<input type="text" class="form-control" id="inputApellidoM" placeholder="Apellido Materno">
    	</div>
  	</div>
  	<div class="form-group">
    	<label for="inputNombreL">Correo electronico</label>
    	<input type="email" class="form-control" id="inputMail" placeholder="Correo electronico" required>
  	</div>
  	<div class="form-group">
    	<label for="inputNombreL">Contraseña</label>
    	<input type="password" class="form-control" id="inputPassword" placeholder="Contraseña" required>
  	</div>
		<div class="form-group">
    	<label for="inputType">Tipo</label>
    	<select class="form-control" id="inputType">
      	<option>admin</option>
      	<option>vendedor</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<div class="form-check">
      	<input class="form-check-input" type="checkbox" id="inputActive" value="1">
      	<label class="form-check-label" for="inputActive">
        	Usuario Activo
      	</label>
    	</div>
  	</div>
  	<button type="submit" class="btn btn-sm btn-info" id="add">
			Agregar
		</button>
		<button onclick="location.href='index.php';" type="button" class="btn btn-danger btn-sm">Cancelar</button>
		<span class="" role="status" aria-hidden="true" id="load"></span>
		<div class="" role="alert" id="message">
		</div>
	</form>

</div><!--Contenido-->

<script src="addUser.js"></script>

</body>
</html>
