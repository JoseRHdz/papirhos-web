<?php

//Ejemplo de uso de la clase Libro
$id = Libro::newLibro("Grupos IV");
$libro = new Libro($id);
$libro->setTitulo("Grupos II");
$titulo = $libro->getTitulo();


//Ejemplo de uso de la clase Version
$id = Version::newVersion(1,"4234-34543-3423555",1,150.79,10,date("Y-m-d"),
                          "pasta blanda","archivo.png","Se vende con disco de 
													regalo");
$version = new Version($id);
$version->setEdicion(8);
$edicion = $version->getEdicion();
$isbn = $version->getISBN();


//Ejemplo de uso de la clase Coleccion
$id = Coleccion::newColeccion("1234-443-345-24","paphiros");
$coleccion = new Coleccion($id);
$coleccion->setNombre("Matem");
$nombre = $coleccion->getNombre();
$isbn = $coleccion->getISBN();


//Ejemplo de uso de la clase Serie
$id = Serie::newSerie("Papirhosss");
$serie = new Serie($id);
$serie->setNombre("Papirhos");
$nombre = $serie->getNombre();


//Ejemplo de uso de la clase Autor
$id=Autor::newAutor('Juan','Per','C','Juan Peréz Carmona');
$autor = new Autor($id);
$autor->setNLegal("Juan Peréz");
$nombre = $autor->getNombre();
$apellidoP = $autor->getApellidoP();
$apellidoM = $autor->getApellidoM();
$nombreL = $autor->getNLegal();


//Ejemplo de uso de la clase AutoriaLibro
$id = AutoriaLibro::newAutoriaLibro(1,1);
$autorLibro = new AutoriaLibro($id);
$autorLibro->setIdV("Física");
$idV = $autorLibro->getIdV();
$idA = $autorLibro->getIdA();


//Ejemplo de uso de la clase ColeccionLibro
$id = ColeccionLibro::newColeccionLibro(1,7);
$coleccionLibro = new ColeccionLibro($id);
$coleccionLibro->setIdC(20);
$idV = $coleccionLibro->getIdV();
$idC = $coleccionLibro->getIdC();


//Ejemplo de uso de la clase SerieLibro
$id = SerieLibro::newSerieLibro(10,3);
$SerieLibro = new SerieLibro($id);
$SerieLibro->setIdL(2);
$idV = $serieLibro->getIdV();
$idC = $serieLibro->getIdC();


//Ejemplo de uso de la clase Imprenta
$id = Imprenta::newImprenta("Imprenta del Instituto de Matemáticas");
$imprenta = new Imprenta($id);
$imprenta->setNombre("Prensas UNAM");
$nombre =  $l->getNombre();


//Ejemplo de uso de la clase ImpresionLibro
$id = ImpresionLibro::newImpresionLibro(10,5,2,'2019-02-20',300);
$impresionLibro = new Imprenta($id);
$impresionLibro->setEjemplares(400);
$impresion = $impresionLibro->getImpresion();


//Ejemplo de uso de la clase Usuario
$id = Usuario::newUsuario('Pedro','Vásquez','Medina',
								 'correo@ciencias.unam.mx','123',
								 'admin',1);
$usuario = new Usuario($idU);
$nombre = $usuario->getNombre();
$usuario->setApellidoP("Hernández");
$mail = $usuario->getEmail();
$usuario->setEstatus(0);


//Ejemplo de uso de la clase VentasLibro
$id = VentasLibro::newVentasLibro(4,1,1,2,date("Y-m-d"),"precioLista",172.50,
																	"archivo.jpg");
$venta = new VentasLibro($id);
$venta->setPrecio(123.78);
$precio = $venta->getPrecio();

?>
