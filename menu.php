<?php
echo
"<div>
  <nav class='topnav'>
    <ul>
      <li>
        <a href=$config[doc_root]>Inicio</a>
      </li>
      <li class='dropdown'>
        <a href='javascript:void(0)' class='dropbtn'>Autores</a>
        <div class='dropdown-content'>
          <a href=$config[doc_root]Autores>Ver autores</a>
          <a href=$config[doc_root]Autores/newAutor.php>Agregar Autor</a>
        </div>
      </li>
      <li class='dropdown'>
        <a href='javascript:void(0)' class='dropbtn'>Libros</a>
        <div class='dropdown-content'>
          <a href=$config[doc_root]Libros>Ver libros</a>
          <!-- aún está por escribirse esta parte -->
          <a href=''>Agregar Libro</a>
        </div>
      </li>
      <li>
        <a href=''>Ventas</a>
      </li>
      <li class='dropdown'>
        <a href='javascript:void(0)' class='dropbtn'>Usuarios</a>
        <div class='dropdown-content'>
          <a href=$config[doc_root]Usuarios>Ver Usuarios</a>
          <a href=$config[doc_root]Usuarios/newUser.php>Agregar Usuario</a>
        </div>
			</li>
			<li>
    		<form class='form-inline p-2' mthod=POST action=$config[doc_root]login.php>
      		<div class='form-group mx-sm-2 mb-1'>
      			<label for='staticEmail2' class='sr-only'>Email</label>
      			<input type='email' class='form-control form-control-sm' id='' placeholder='e-mail'>
      		</div>
      		<div class='form-group mx-sm-2 mb-1'>
      			<label for='inputPassword2' class='sr-only'>Password</label>
      			<input type='password' class='form-control form-control-sm' id='' placeholder='Password'>
      		</div>
      		<div class='form-group mx-sm-2 mb-1'>
    				<button type='submit' class='btn btn-info form-control-sm'>Ingresar</button>
      		</div>
				</form>
  		</li>
    </ul>
  </nav>
</div>";
?>
