<?php
global $title;
$title="Nuevo Autor";
include "../header.php";

?>

<div id="contenido">
	<h2>Agregar Autor</h2>

	<form id="formNewAutor">
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
    	<label for="inputNombreL">Nombre Legal</label>
    	<input type="text" class="form-control" id="inputNombreL" placeholder="Nombre legal del autor">
  	</div>
  	<div class="form-group">
    	<div class="form-check">
      	<input class="form-check-input" type="checkbox" id="same">
      	<label class="form-check-label" for="same">
        	Mismo nombre
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

<script src="addAutor.js"></script>

</body>
</html>
