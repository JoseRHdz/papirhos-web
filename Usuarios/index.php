<?php
global $title;
$title="Usuarios";
include "../header.php";

?>

<div id="contenido">
	<h2>Usuarios</h2>

	<div class="container">
  	<div class="row">
    	<div class="col align-self-start">
    	</div>
    	<div class="col align-self-center">
				<form class="form-inline">
    			<div class="input-group">
    				<div class="input-group-prepend">
      				<span class="input-group-text" id="basic-addon0"><i class="fas fa-user"></i></span>
      			</div>
      		<input id="search" type="text" class="form-control" placeholder="Buscar Usuario..." aria-label="search" aria-describedby="basic-addon1">
    				<div class="input-group-prepend">
      				<span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
      			</div>
    			</div>
  			</form>
    	</div>
    	<div class="col align-self-end">
				<div class="text-right">
					<button onclick="location.href='newUser.php';" type="button" title="Nuevo Autor" class="btn btn-light btn-sm"><i class="fas fa-user-plus"></i></button>
				</div>
  		</div>
	</div>



		<table class="table table-striped table-light table-bordered table-hover" id="table">
			<thead class="thead-dark">
				<tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Correo electrónico</th>
					<th>Tipo</th>
					<th>Estatus</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
			<tfoot class="table-dark">
				<tr>
      		<th colspan="7" class="ts-pager bg-info">
        		<div class="form-inline">
          		<div class="btn-group btn-group-sm mx-1" role="group">
            		<button type="button" class="btn btn-secondary first" title="first"><i class="fas fa-angle-double-left"></i>

</button>
            		<button type="button" class="btn btn-secondary prev" title="previous"><i class="fas fa-chevron-left"></i>

</button>
          		</div>
          		<span class="pagedisplay"></span>
          		<div class="btn-group btn-group-sm mx-1" role="group">
            		<button type="button" class="btn btn-secondary next" title="next"><i class="fas fa-chevron-right"></i>

</button>
            		<button type="button" class="btn btn-secondary last" title="last"><i class="fas fa-angle-double-right"></i></button>
          		</div>
          		<select class="form-control-sm custom-select px-3 pagesize" title="Resultados por página">
            		<option selected="selected" value="10">10</option>
            		<option value="20">20</option>
            		<option value="30">30</option>
            		<option value="all">Todo</option>
          		</select>
          		<select class="form-control-sm custom-select px-3 mx-1 pagenum" title="Número de página"></select>
        			</div>
						</div>
      		</th>
    		</tr>
			</tfoot>
		</table>

    
</div><!--Contenido-->
</script>
<script src="searchUser.js"></script>
</body>
</html>
