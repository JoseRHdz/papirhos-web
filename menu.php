<?php
echo
"<ul class='nav nav-fill'>";
			if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
				echo"
					<li class='nav-item'>
						<span class='text-dark nav-link'>Bienvenid@ $_SESSION[nombre]</span>
					</li>";
			}
			echo
      "<li class='nav-item'>
        <a class='nav-link' href=$config[doc_root]>Inicio</a>
      </li>
      <li class='dropdown nav-item'>
        <a href='javascript:void(0)' class='dropbtn nav-link'>Autores</a>
        <div class='dropdown-content'>
          <a href=$config[doc_root]Autores>Ver autores</a>";
					if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
						echo
          		"<a href=$config[doc_root]Autores/newAutor.php>Agregar Autor</a>";
					}
			echo
        "</div>
      </li>
      <li class='dropdown nav-item'>
        <a href='javascript:void(0)' class='dropbtn nav-link'>Libros</a>
        <div class='dropdown-content'>
          <a href=$config[doc_root]Libros>Ver libros</a>
          <!-- aún está por escribirse esta parte -->";
				if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
					echo"
          	<a href=''>Agregar Libro</a>
       	 	</div>";
				}
			echo"
      </li>";
			if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
			echo"
      <li class='nav-item'>
        <a href='' class='nav-link'>Ventas</a>
      </li>";
			}
			if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
				if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
				echo "
      		<li class='dropdown nav-item'>
        		<a href='javascript:void(0)' class='dropbtn nav-link'>Usuarios</a>
        		<div class='dropdown-content'>
          		<a href=$config[doc_root]Usuarios>Ver Usuarios</a>
          		<a href=$config[doc_root]Usuarios/newUser.php>Agregar Usuario</a>
        		</div>
					</li>";
					}
				}
			if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
				echo "
				<li class='dropdown nav-item'>
        	<a href='javascript:void(0)' class='dropbtn nav-link'>
						<i class='fas fa-user'></i>
						<i class='fas fa-sort-down'></i>
					</a>
        	<div class='dropdown-content'>
          	<a href=$config[doc_root]Usuarios>Perfil</a>
          	<a href=$config[doc_root]logout.php>
							<p class='text-warning'>Salir</p>
						</a>
        	</div>
				</li>";
			}
			else {
    		echo
				"<li class='nav-item'>
					<a class='d-inline p-2.7 btn btn-dark btn-sm nav-link' href='$config[doc_root]login.php' role='button'><i class='fas fa-sign-in-alt'>&nbspIngresar</i></a>
  			</li>";
			}
echo
"</ul>";
?>
