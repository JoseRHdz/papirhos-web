<?php
require_once "clases/Usuario.php";
global $title;
$title="Ingresar";
include "header.php";

if (isset($_SESSION['is_logged'])) {
	header("Location: localhost:81/papirhos-web");
}

$alert="";
$error="<div class='alert alert-danger col-sm-10' role='alert'>
					<i class='fas fa-exclamation-triangle'></i> Usuario o contraseña incorrecta
				</div>";
$warning="<div class='alert alert-warning col-sm-10' role='alert'>
					<i class='fas fa-exclamation-triangle'></i> Usuario inactivo, contacta a la administración.
				</div>";

if (isset($_POST['email']) && isset($_POST['password'])) {
	$user = $_POST['email'];
	$pass = $_POST['password'];

  $sql = "SELECT id FROM Usuario WHERE email = '$user'";                   
  $m = new Master();                                                           
  $result = $m->makeQuery($sql);                                               
  $object = $result->fetch_object();
  if (!is_null($object)) {                                                     
    $id = $object->id;                                                         
    $user = new Usuario($id);                                                     
    if ($user->checkPassword($pass)){                      
     // Si los datos son correctos se activa la variable de sesión para el     
     // usuario.
			if ($user->getEstatus()==0) {
				$alert=$warning;
			}
			else {

      $_SESSION['is_logged']=True;
			$_SESSION['is_admin']=False;
			$_SESSION['is_active']=False;

			if ($user->getTipo()==="admin") {
				$_SESSION['is_admin']=True;
			}


      $_SESSION['nombre']=$user->getNombre();
      $_SESSION['apellidoP']=$user->getApellidoP();
      $_SESSION['apellidoM']=$user->getApellidoM();
			echo '<meta http-equiv="refresh" content="0;url=http://localhost:81/papirhos-web/" />';
			}
		}
		else {
			$alert=$error;
		}
	}
	else {
		$alert=$error;
	}
}


?>

<div id="contenido">
	
	<h2>Acceso</h2>

	<div class="container col-sm-6">
		<?php echo $alert; ?>
		<form method="POST">
  		<div class="form-group row">
    		<label for="email" class="col-sm-2 col-form-label">Usuario</label>
    		<div class="col-sm-8">
      		<input type="email" class="form-control" id="email" placeholder="correo electrónico" name="email" required>
    		</div>
  		</div>
  		<div class="form-group row">
    		<label for="password" class="col-sm-2 col-form-label">Contraseña</label>
    		<div class="col-sm-8">
      		<input type="password" class="form-control" id="password" placeholder="contraseña" name="password" required>
    		</div>
  		</div>
			<button type="submit" class="btn btn-info btn-sm">Ingresar</button>
		</form>
	</div>
</div><!--Contenido-->

</body>
</html>




