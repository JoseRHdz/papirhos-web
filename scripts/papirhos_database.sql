-- MySQL dump 10.13  Distrib 8.0.17, for linux-glibc2.12 (x86_64)
--
-- Host: localhost    Database: papirhosDB
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Autor`
--

DROP TABLE IF EXISTS `Autor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) DEFAULT NULL,
  `nombreLegal` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Autor`
--

LOCK TABLES `Autor` WRITE;
/*!40000 ALTER TABLE `Autor` DISABLE KEYS */;
INSERT INTO `Autor` VALUES (1,'Ángel','Alvarez','Prieto',NULL),(2,'Anne','Alberro','Semerena',NULL),(3,'Antoni A.','Wawrzyñzyk','',NULL),(4,'Alejandro','Casares','Maldonado',NULL),(5,'Albrecht','Dold','',NULL),(6,'Alejandro','Díaz-Barriga','',NULL),(7,'Alistair','Fitt','',NULL),(8,'Andrés','Fraguela','Collar',NULL),(9,'Adalberto','García','Máynez',NULL),(10,'Alberto G.','Raggi','',NULL),(11,'Alexis','García','Zamora',NULL),(12,'Audum','Holme','',NULL),(13,'Adrían','Hernández ','del Valle',NULL),(14,'Alejandro','Illanes','Mejía',NULL),(15,'Ana Irene','Ramírez-Galarza','',NULL),(16,'Alexander M.','Chebotarev','',NULL),(17,'Ángel Manuel','Carrillo','Hoyo',NULL),(18,'Alfredo','Nicolás','',NULL),(19,'Arturo','Olvera','',NULL),(20,'A.','Pérez','',NULL),(21,'A.','Rocha','Arteaga',NULL),(22,'Ángel','Soriano','',NULL),(23,'Andrés','Sestier','Bouclier',NULL),(24,'Adolfo','Sánchez','Valenzuela',NULL),(25,'Ángel','Tamariz','Mascarúa',NULL),(26,'Arturo','Vargas','',NULL),(27,'Anton','Wakolbinger','',NULL),(28,'Alan W.','Pollack','',NULL),(29,'Bernd','Bank','',NULL),(30,'Begoña','Fernández','',NULL),(31,'Bruno J.','Mueller','',NULL),(32,'Bernardo M.','Ábrego','Lerma',NULL),(33,'Beatriz','Rumbos','',NULL),(34,'Carlos','Bosch','Giral',NULL),(35,'Claude','Cibils','',NULL),(36,'Claudia','Durán','',NULL),(37,'Carlos','Hernández','Garciadiego',NULL),(38,'Carlos Jacob','Rubio','Barrios',NULL),(39,'Cecilia','Neve','Jiménez',NULL),(40,'Carlos','Prieto','',NULL),(41,'Carlos','Rentería','',NULL),(42,'Carlos R.','Videla','',NULL),(43,'Carlos','Signoret','',NULL),(44,'Carlos','Sancho','de Salas',NULL),(45,'Constantin','Tudor','',NULL),(46,'Christopher T. J.','Dodson','',NULL),(47,'Cristóbal','Vargas','',NULL),(48,'Carlos','Villegas','Blas',NULL),(49,'Diana','Avella','Alaminos',NULL),(50,'Diego','Bricio','Hernández',NULL),(51,'Dominique','Cerveau','Prieto',NULL),(52,'Daniel','Hernández','',NULL),(53,'Diederich','Hinrichsen','Fachbereich',NULL),(54,'Dũng Tráng','Lê','',NULL),(55,'Elvio','Accinelli','',NULL),(56,'Edith Corina','Sáenz','Valadez',NULL),(57,'Emiliano','Fernández','Bermejo',NULL),(58,'Elena','de Oteyza','',NULL),(59,'Eugenio P.','Balanzario','',NULL),(60,'Ernesto','Pérez','Chavela',NULL),(61,'Ernesto','Rosales','González',NULL),(62,'Eliane R.','Rodrigues','',NULL),(63,'Ernesto','Vallejo','',NULL),(64,'Francisco','Aranda','',NULL),(65,'Fernando','Ávila','Murillo',NULL),(66,'Fausto Antonio','Ongay','Larios',NULL),(67,'Felipe','Cano','',NULL),(68,'Fidel','Casarrubias','Segura',NULL),(69,'Fernando','Hernández','Hernández',NULL),(70,'Florian','Luca','',NULL),(71,'Francis','Leon','Jones',NULL),(72,'Francisco','Larrión','Riveroll',NULL),(73,'Fabián Mario','Hernández','Arellano',NULL),(74,'Federico','O\'Reilly','',NULL),(75,'Frank','Loray','',NULL),(76,'Federico','Sánchez','Bringas',NULL),(77,'Faustino','Sánchez','Garduño',NULL),(78,'Francisco','Tomás','',NULL),(79,'Felipe','Zaldívar','',NULL),(80,'Gonzalo','Contreras','',NULL),(81,'Gabriela','Campero','Arena',NULL),(82,'George','Kempf','',NULL),(83,'Guillermo','Sienra','',NULL),(84,'Gerónimo','Uribe','Bravo',NULL),(85,'G.','Valencia','',NULL),(86,'Gabriel','Villa','Salvador',NULL),(87,'Gonzalo','Zubieta','',NULL),(88,'Hugo','Arizmendi','',NULL),(89,'Héctor','Méndez','',NULL),(90,'Hilary','Ockendon','',NULL),(91,'Horst','Herrlich','',NULL),(92,'Hugo','Rincón','Mejía',NULL),(93,'Héctor','Sánchez','Morgado',NULL),(94,'Horacio','Tapia','',NULL),(95,'Hubertus Th.','Jongen','',NULL),(96,'Hugo','Hadwiger','',NULL),(97,'Heinz W.','Engl','',NULL),(98,'Isidoro','Gitler','',NULL),(99,'I. W.','Lewis','',NULL),(100,'Jorge Agustín','Bustamante','Fernández',NULL),(101,'José Antonio','Flores','Díaz',NULL),(102,'José Antonio','Gómez','Ortega',NULL),(103,'J. Alfredo','López','Mimbela',NULL),(104,'Jorge Alberto','León ','Vázquez',NULL),(105,'Javier','Alfaro','Pastor',NULL),(106,'José Antonio','de la Peña','Mena',NULL),(107,'José Antonio','Seade','',NULL),(108,'José Antonio ','Seade','Kuri',NULL),(109,'Javier','Bracho','',NULL),(110,'Juan Carlos','López','Velarde',NULL),(111,'Joaquín','Delgado','',NULL),(112,'James D.','Stasheff','',NULL),(113,'J. Enrique','Figueroa','López',NULL),(114,'Javier F.','Rosenblueth','',NULL),(115,'Jurgen','Guddat','',NULL),(116,'Jesús','González','Espino-Barros',NULL),(117,'Jorge','Ize','',NULL),(118,'J. J.','Ruckmann','',NULL),(119,'José Luis','Fernández','Muñiz',NULL),(120,'José Luis','Gutiérrez','Sánchez',NULL),(121,'Jose Luis','Morales','Pérez',NULL),(122,'José ','Martínez','Bernal',NULL),(123,'José María ','González','Barrios',NULL),(124,'José María','Muñoz','Porras',NULL),(125,'Jesús','Muciño','Raymundo',NULL),(126,'Joaquín','Olivares','',NULL),(127,'José Omegar','Calvo','Andrade',NULL),(128,'Jean-Paul','Brasselet','',NULL),(129,'Joel','Roberts','',NULL),(130,'Jawad','Snoussi','',NULL),(131,'J.','Villa','Morales',NULL),(132,'Josef','Waschbusch','',NULL),(133,'John W.','Milnor','',NULL),(134,'K.','Sato','',NULL),(135,'Luis Antonio','Rincón','',NULL),(136,'Leticia','Brambila','Paz',NULL),(137,'Lino Feliciano','Reséndis','',NULL),(138,'Luis G.','Gorostiza','',NULL),(139,'Luis','Hernández','Lamoneda',NULL),(140,'Laura','Hidalgo','Solís',NULL),(141,'Luis','Montejano','',NULL),(142,'Luis Miguel','García','Velázquez',NULL),(143,'Lilia María','del Riego','Senior',NULL),(144,'Luis Manuel','Tovar','',NULL),(145,'Luis M.','Villegas','',NULL),(146,'Laura','Ortiz','Bobadilla',NULL),(147,'Luis','Ribes','',NULL),(148,'Laura','Rosales','Ortiz',NULL),(149,'Leonardo','Salmerón','',NULL),(150,'Luis','Verde','',NULL),(151,'Marcelo A.','Aguilar','',NULL),(152,'Miguel A.','Jiménez','',NULL),(153,'Mark','Spivakovsky','',NULL),(154,'Mónica','Clapp','',NULL),(155,'María del Carmen','Hernández','Ayuso',NULL),(156,'Manuel','Cruz','López',NULL),(157,'Mario','Cruz','Terán',NULL),(158,'María','Emilia','Caballero',NULL),(159,'Mario','Eudave','Muñoz',NULL),(160,'Montserrat','García','Campos',NULL),(161,'Manuel','Ibarra','Contreras',NULL),(162,'María José','Souto','Salorio',NULL),(163,'Miguel','Lara','',NULL),(164,'Michael L.','Overton','',NULL),(165,'María Luisa','Pérez-Seguí','',NULL),(166,'Manuel','Medoza','',NULL),(167,'Max','Neumann','',NULL),(168,'Mutsuo','Oka','',NULL),(169,'María del Pilar','Alonso','Reyes',NULL),(170,'Martha','Rzedowski','',NULL),(171,'Miguel','Raggi','Pérez',NULL),(172,'Michael','Shapiro','',NULL),(173,'M.','Todorov','',NULL),(174,'Onésimo','Hernández-Lerma','',NULL),(175,'Octavio','Mendoza','Hernández',NULL),(176,'Óscar','Palmas','Velasco',NULL),(177,'Pantelimon','Stanica','',NULL),(178,'Pablo','Barrera','',NULL),(179,'Pedro Luis','del Ángel','',NULL),(180,'Pablo','Padilla','',NULL),(181,'Pablo','Soberón','Bravo',NULL),(182,'Radmila','Bulajich','Manfrino',NULL),(183,'Raúl','Escobedo','',NULL),(184,'Renato Gabriel','Iturriaga','Acevedo',NULL),(185,'Rafael H.','Villarreal','',NULL),(186,'Rolando','Jiménez','B.',NULL),(187,'Raúl','Montes de Oca','',NULL),(188,'Roberto','Martínez','Villa',NULL),(189,'Roberto','Pichardo','Mendoza',NULL),(190,'Roberto','Quezada','',NULL),(191,'Raúl','Quiroga','Barranco',NULL),(192,'Rubí','Rodríguez','',NULL),(193,'Rafael','del Río','Castillo',NULL),(194,'Rogelio','Valdez','Delgado',NULL),(195,'Rita','Vázquez','Padilla',NULL),(196,'Sam B.','Nadler','',NULL),(197,'Silvestre','Cárdenas','Rubio',NULL),(198,'Samuel','Gitler','',NULL),(199,'Sergio','Macías','Alvarez',NULL),(200,'Sylvia','de Neymet','U.',NULL),(201,'Salvador','Pérez','Esteva',NULL),(202,'Sevín','Recillas','',NULL),(203,'S. ','Xambó','Descamps',NULL),(204,'Tomasz','Bojdecki','',NULL),(205,'Teruhisa','Matsusaka','',NULL),(206,'Vladimir','Estivill','Castro',NULL),(207,'Victor','Guillemin','',NULL),(208,'Victoria','Hernández','',NULL),(209,'Víctor M.','Rivero','',NULL),(210,'Víctor','Pérez','Abreu',NULL),(211,'Werner','Romisch','',NULL),(212,'W. T.','Ingram','',NULL),(213,'William Y.','Vélez','',NULL),(214,'Wieslaw','Zelazko','',NULL),(215,'Xavier','Gómez-Mont','Ávalos',NULL);
/*!40000 ALTER TABLE `Autor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `AutoriaLibro`
--

DROP TABLE IF EXISTS `AutoriaLibro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `AutoriaLibro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Autor_id` int(11) NOT NULL,
  `Version_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_AutoriaLibro_Autor1_idx` (`Autor_id`),
  KEY `fk_AutoriaLibro_Version1_idx` (`Version_id`),
  CONSTRAINT `fk_AutoriaLibro_Autor1` FOREIGN KEY (`Autor_id`) REFERENCES `Autor` (`id`),
  CONSTRAINT `fk_AutoriaLibro_Version1` FOREIGN KEY (`Version_id`) REFERENCES `Version` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AutoriaLibro`
--

LOCK TABLES `AutoriaLibro` WRITE;
/*!40000 ALTER TABLE `AutoriaLibro` DISABLE KEYS */;
/*!40000 ALTER TABLE `AutoriaLibro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Coleccion`
--

DROP TABLE IF EXISTS `Coleccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Coleccion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ISBN_UNIQUE` (`ISBN`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Coleccion`
--

LOCK TABLES `Coleccion` WRITE;
/*!40000 ALTER TABLE `Coleccion` DISABLE KEYS */;
INSERT INTO `Coleccion` VALUES (1,'A_T_27','Aportaciones Matemáticas'),(2,'A_T_42','Aportaciones Matemáticas'),(3,'C_O_6a','Cuadernos de Olimpiadas de Matemáticas'),(4,'E_E_T','Ediciones Especiales'),(5,'M_I_23','Monografías del Instituto de Matemáticas'),(6,'P_T_07','Papirhos'),(7,'T_B_08','Temas de Matemáticas para bachillerato');
/*!40000 ALTER TABLE `Coleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ColeccionLibro`
--

DROP TABLE IF EXISTS `ColeccionLibro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ColeccionLibro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Version_id` int(10) unsigned NOT NULL,
  `Coleccion_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_coleccionLibro_Version1_idx` (`Version_id`),
  KEY `fk_coleccionLibro_Coleccion1_idx` (`Coleccion_id`),
  CONSTRAINT `fk_coleccionLibro_Coleccion1` FOREIGN KEY (`Coleccion_id`) REFERENCES `Coleccion` (`id`),
  CONSTRAINT `fk_coleccionLibro_Version1` FOREIGN KEY (`Version_id`) REFERENCES `Version` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ColeccionLibro`
--

LOCK TABLES `ColeccionLibro` WRITE;
/*!40000 ALTER TABLE `ColeccionLibro` DISABLE KEYS */;
/*!40000 ALTER TABLE `ColeccionLibro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Comprador`
--

DROP TABLE IF EXISTS `Comprador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Comprador` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) DEFAULT NULL,
  `NoCuenta` varchar(45) DEFAULT 'N/A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comprador`
--

LOCK TABLES `Comprador` WRITE;
/*!40000 ALTER TABLE `Comprador` DISABLE KEYS */;
/*!40000 ALTER TABLE `Comprador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Imprenta`
--

DROP TABLE IF EXISTS `Imprenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Imprenta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Imprenta`
--

LOCK TABLES `Imprenta` WRITE;
/*!40000 ALTER TABLE `Imprenta` DISABLE KEYS */;
/*!40000 ALTER TABLE `Imprenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ImpresionLibro`
--

DROP TABLE IF EXISTS `ImpresionLibro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ImpresionLibro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Version_id` int(10) unsigned NOT NULL,
  `Imprenta_id` int(10) unsigned NOT NULL,
  `impresion` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fecha` date NOT NULL,
  `ejemplares` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ImpresionLibro_Imprenta1_idx` (`Imprenta_id`),
  KEY `fk_ImpresionLibro_Version1_idx` (`Version_id`),
  CONSTRAINT `fk_ImpresionLibro_Imprenta1` FOREIGN KEY (`Imprenta_id`) REFERENCES `Imprenta` (`id`),
  CONSTRAINT `fk_ImpresionLibro_Version1` FOREIGN KEY (`Version_id`) REFERENCES `Version` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ImpresionLibro`
--

LOCK TABLES `ImpresionLibro` WRITE;
/*!40000 ALTER TABLE `ImpresionLibro` DISABLE KEYS */;
/*!40000 ALTER TABLE `ImpresionLibro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Libro`
--

DROP TABLE IF EXISTS `Libro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Libro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Libro`
--

LOCK TABLES `Libro` WRITE;
/*!40000 ALTER TABLE `Libro` DISABLE KEYS */;
INSERT INTO `Libro` VALUES (1,'Programa de investigación del XVIII Congreso Nacional de la  Sociedad Matemática'),(2,'Teoremas límite de alta densidad para campos aleatorios ramificados'),(3,'Programa del XIX Congreso Nacional de la sociedad Matemática Mexicana, Vol. I. M'),(4,'Programa del XIX Congreso Nacional de la Sociedad Matemática Mexicana, Vol. II. '),(5,'Programa del XX Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. '),(6,'XXI Congreso Nacional de la Sociedad Matemática Mexican. Memorias. Hermosillo, S'),(7,'Breve introducción a códigos detectores-correctores de error'),(8,'XXII Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Puebla, Pue'),(9,'XXIII Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Guanajuato'),(10,'La estructura de los dendroides suaves'),(11,'XXIV Congreso Nacional de la Sociedad Matemática Mexicana Memorias. Oaxtepec, Mo'),(12,'XXV Congreso Nacional de la Sociedad Matemática Mexicana Vol. I. Memorias. Xalap'),(13,'XXV Congreso Nacional de la Sociedad Matemática Mexicana Vol. II. Memorias. Xala'),(14,'XXVI Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Morelia, Mi'),(15,'XI Escuela Latinoamericana de Matemáticas. Memorias. UNAM, México, D.F.; CIMAT, '),(16,'XXVII Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Querétaro,'),(17,'Grupo de estudio con la industria y cursos en matemáticas industriales. Memorias'),(18,'XXVIII Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Colima, C'),(19,'Problemas combinatorios sobre conjuntos finitos de puntos'),(20,'XXIX Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. San Luis Po'),(21,'IV Escuela de verano de geometría y sistemas dinámicos. Memorias. Cimat, Guanaju'),(22,'XXX Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Aguascalient'),(23,'Segundo grupo de estudio con la industria y cursos en matemáticas industriales. '),(24,'3rd International conference on approximation and optimization in the Caribean. '),(25,'XXXI Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Hermosillo,'),(26,'Tendencias interdisciplinarias en las matemáticas.'),(27,'XXXII Congreso nacional de la Sociedad Matemática Mexicana. Memorias. Guadalajar'),(28,'Lecturas básicas en topología general'),(29,'XXXIII Congreso nacional de la Sociedad Matemática Mexicana. Memorias. Saltillo,'),(30,'XXXIV Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Toluca, M '),(31,'Tópicos de Geometría Algebraica'),(32,'XXXV Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Durango, Dg'),(33,'(Número Cancelado)'),(34,'XXXVI Congreso Nacional de la Sociedad Matemática Mexicana. Memorias. Pachuca, H'),(35,'Memorias de la Sociedad Matemática Mexicana. (2005)'),(36,'Memorias de la Sociedad Matemática Mexicana. (2006)'),(37,'Memorias de la Sociedad Matemática Mexicana. (2007)'),(38,'Memorias de la Sociedad Matemática Mexicana. (2008)'),(39,'Modelos en estadística y probabilidad'),(40,'Memorias de la Sociedad Matemática Mexicana. (2009)'),(41,'Memorias de la Sociedad Matemática Mexicana. (2010)'),(42,'Las matemáticas a través de los 50 años de la ESFM del IPN.'),(43,'Memorias de la Sociedad Matemática Mexicana. (2011)'),(44,'Modelos en estadística y probabilidad II'),(45,'Memorias de la Sociedad Matemática Mexicana. (2012)'),(46,'Memorias de la Sociedad Matemática Mexicana. (2013)'),(47,'Modelos en estadística y probabilidad III'),(48,'Memorias de la Sociedad Matemática Mexicana. (2014)'),(49,'Coloquio de sistemas dinámicos. Memorias. Guanajuato, México, 1983.'),(50,'Categorical Topology - The Complete Work of Graciela Salicrup'),(51,'Sistemas dinámicos holomorfos en superficies'),(52,'Simposio de probabilidad y procesos estocásticos. Memorias. Guanajuato, México 1'),(53,'Topics in Algebraic Geometry. Proceedings. Guanajuato, Mexico1989.'),(54,'Seminario internacional de álgebra y sus aplicaciones. Memorias. México 1991.'),(55,'II Simposio de probabilidad y procesos estocásticos. I Encuentro México-Chile de'),(56,'Taller de geometría diferencial sobre espacios de geometrías. Memorias. Guanajua'),(57,'Poblaciones aleatorias ramificadas y sus equilibrios'),(58,'Una introducción a la geometría computacional a través de los teoremas de la gal'),(59,'III Simposio de probabilidad y procesos estocásticos. Memorias. Hermosillo, Méxi'),(60,'IV Simposio de probabilidad y procesos estocásticos. Memorias. Guanajuato, Méxic'),(61,'Taller de variedades abelianas y funciones theta. Memorias. Morelia, Mich., Méxi'),(62,'Modelos estocásticos'),(63,'Inverse Limits'),(64,'Modelos estocásticos II'),(65,'Topics in Infinitely Divisible Distributions and Lévy Processes'),(66,'Parametric Optimization and Related Topics VII'),(67,'Continuum Theory: in Honor of Professor David P. Bellamy on the Occasion of this'),(68,'Proceedings of the Fourteenth International Conference on Fibonacci Numbers and '),(69,'Introducción a la topología – Graciela Salicrup'),(70,'Procesos estocásticos'),(71,'Lectures on Continuous-Time Markov Control Processes'),(72,'Un curso de lógica matemática'),(73,'Rudimentos de mansedumbre y salvajismo en teoría de representaciones'),(74,'Teoría general de procesos e integración estocástica'),(75,'Intersection Theory'),(76,'Inverse Problems'),(77,'El ABC de los splines'),(78,'Lo antiguo y lo nuevo acerca de los conjuntos convexos'),(79,'Matemáticas para las ciencias naturales'),(80,'Introducción a la teoría de redes'),(81,'Teoría de conjuntos (una introducción)'),(82,'Lectures on Quantum Probability'),(83,'Construcción de procesos autosimilares con variancia finita'),(84,'Grupos algebraicos y teoría de invariantes'),(85,'Cohomología de Galois de campos locales'),(86,'Dimension Theory: An Introduction with Exercises'),(87,'Cómputo numérico con aritmética de punto flotante IEEE. Con un teorema, una regl'),(88,'Topología diferencial'),(89,'Elementos de probabilidad y estadística'),(90,'Topología general'),(91,'Introducción a los grupos topológicos de transformaciones'),(92,'Breviario de teoría analítica de los números'),(93,'Cálculo de probabilidades'),(94,'Números primos y aplicaciones'),(95,'Historia y desarrollo de la teoría de los continuos indescomponibles'),(96,'Hiperespacios de continuos'),(97,'Cadenas de Markov'),(98,'The Fixed Point Property for Continua'),(99,'Invitación a la teoría de los continuos y sus hiperespacios'),(100,'Introducción a la teoría de grupos'),(101,'Hyperspaces of Sets. A text With Research Questions'),(102,'Introducción a la optimización no lineal'),(103,'Graphs, Rings and Polyhedra'),(104,'Introducción a la topología de conjuntos'),(105,'Elementos de topología general'),(106,'Cálculo'),(107,'Curso elemental de probabilidad y estadística'),(108,'Álgebras booleanas y espacios topológicos'),(109,'Introducción a la teoría de la medida'),(110,'Combinatoria'),(111,'Principios de olimpiada'),(112,'Geometría'),(113,'Geometría. Ejercicios y problemas'),(114,'Teoría de números'),(115,'Desigualdades'),(116,'Olimpiadas en SLP, elemental'),(117,'Olimpiadas en SLP, avanzado'),(118,'Matemáticas preolímpicas'),(119,'Combinatoria para olimpiadas internacionales'),(120,'Problemas avanzados de olimpiada'),(121,'Combinatoria avanzada'),(122,'Principio de las casillas'),(123,'Álgebra'),(124,'Inequalities'),(125,'Memorias del 50 Aniversario del Instituto de Matemáticas. 1942-1992'),(126,'Matemáticas en la UNAM. Memorias del 60 Aniversario del Instituto de Matemáticas'),(127,'Alberto Barajas, su oratoria, sus matemáticas y sus enseñanzas'),(128,'Topología algebraica. Un enfoque homotópico'),(129,'Localization in Noncommutative Rings'),(130,'Teoría de los números algebraicos'),(131,'Integrales de medida positiva'),(132,'Rings With Polynomial Identities'),(133,'Grupos profinitos, grupos libres y productos libres'),(134,'Introducción a la teoría de las clases características en la geometría algebraic'),(135,'Embeddings, Projective Invariants and Classifications'),(136,'The Relative Spectral Sequence of Leray-Serre for Fibrations Pairs'),(137,'Caminatas aleatorias y movimiento browniano'),(138,'On Polarized Varieties'),(139,'Métodos diagramáticos en teoría de representaciones'),(140,'Espacios simplécticos sobre ß-anillos y anillos de Hermite, transvecciones simpl'),(141,'Abelian Integrals'),(142,'On Selfinjective Algebras of Finite Representation Type'),(143,'On Ideal Theory in Banach and Topological Algebras'),(144,'Teoría general de procesos e integración estocástica'),(145,'La figura espectral de operadores'),(146,'Teoría de punto fijo'),(147,'Projective Embeddings of Algebraic Varieties'),(148,'Teoría general de procesos e integración estocástica'),(149,'Análisis funcional I'),(150,'Introducción a la topología de las variedades de dimensión infinita'),(151,'Introducción a la teoría de representaciones de álgebras'),(152,'Dos o tres trazos'),(153,'Cónicas, cuádricas y aplicaciones'),(154,'Por la senda de los círculos'),(155,'Teoría de singularidades en topología, geometría y foliaciones I'),(156,'Teoría de singularidades en topología, geometría y foliaciones II'),(157,'Grupos I'),(158,'Análisis matemático'),(159,'Topología diferencial'),(160,'Grupos II'),(161,'Geometría euclidiana bidimensional'),(162,'Curso introductorio de Álgebra I'),(163,'Clases características'),(164,'Cuando cuentes cuántos...'),(165,'Sistemas de ecuaciones y desigualdades'),(166,'La historia de un empujón: un vistazo a las ecuaciones y los sistemas dinámicos'),(167,'Estadística descriptiva para bachillerato'),(168,'Relaciones de equivalencia'),(169,'Mosaicos'),(170,'Funciones circulares');
/*!40000 ALTER TABLE `Libro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Serie`
--

DROP TABLE IF EXISTS `Serie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Serie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Serie`
--

LOCK TABLES `Serie` WRITE;
/*!40000 ALTER TABLE `Serie` DISABLE KEYS */;
INSERT INTO `Serie` VALUES (1,'Comunicaciones'),(2,'Investigación'),(3,'Textos'),(4,'N/A'),(5,'Icosaedro'),(6,'Mixbaal'),(7,'Notas');
/*!40000 ALTER TABLE `Serie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SerieLibro`
--

DROP TABLE IF EXISTS `SerieLibro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SerieLibro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Version_id` int(10) unsigned NOT NULL,
  `Serie_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_serieLibro_Serie1_idx` (`Serie_id`),
  KEY `fk_serieLibro_Version1_idx` (`Version_id`),
  CONSTRAINT `fk_serieLibro_Serie1` FOREIGN KEY (`Serie_id`) REFERENCES `Serie` (`id`),
  CONSTRAINT `fk_serieLibro_Version1` FOREIGN KEY (`Version_id`) REFERENCES `Version` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SerieLibro`
--

LOCK TABLES `SerieLibro` WRITE;
/*!40000 ALTER TABLE `SerieLibro` DISABLE KEYS */;
/*!40000 ALTER TABLE `SerieLibro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidoP` varchar(45) NOT NULL,
  `apellidoM` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(300) NOT NULL,
  `tipo` enum('admin','vendedor') NOT NULL DEFAULT 'vendedor',
  `estatus` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VentasLibro`
--

DROP TABLE IF EXISTS `VentasLibro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `VentasLibro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario_id` int(10) unsigned NOT NULL,
  `Comprador_id` int(10) unsigned NOT NULL,
  `Version_id` int(10) unsigned NOT NULL,
  `cantidad` smallint(5) unsigned NOT NULL,
  `fecha` date NOT NULL,
  `tipoPrecio` enum('precioLista','desc1','desc2') NOT NULL DEFAULT 'precioLista',
  `precio` decimal(6,2) NOT NULL,
  `recibo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_VentasLibro_Usuario1_idx` (`Usuario_id`),
  KEY `fk_VentasLibro_Comprador1_idx` (`Comprador_id`),
  KEY `fk_VentasLibro_Version1_idx` (`Version_id`),
  CONSTRAINT `fk_VentasLibro_Comprador1` FOREIGN KEY (`Comprador_id`) REFERENCES `Comprador` (`id`),
  CONSTRAINT `fk_VentasLibro_Usuario1` FOREIGN KEY (`Usuario_id`) REFERENCES `Usuario` (`id`),
  CONSTRAINT `fk_VentasLibro_Version1` FOREIGN KEY (`Version_id`) REFERENCES `Version` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VentasLibro`
--

LOCK TABLES `VentasLibro` WRITE;
/*!40000 ALTER TABLE `VentasLibro` DISABLE KEYS */;
/*!40000 ALTER TABLE `VentasLibro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Version`
--

DROP TABLE IF EXISTS `Version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Version` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Libro_id` int(10) unsigned NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `edicion` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `precioLista` decimal(6,2) NOT NULL,
  `reserva` smallint(5) unsigned NOT NULL DEFAULT '1',
  `fecha` date NOT NULL,
  `formato` enum('pasta blanda','pasta dura','digital') NOT NULL DEFAULT 'pasta blanda',
  `portada` varchar(20) DEFAULT 'N/A',
  `nota` tinytext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ISBN_UNIQUE` (`ISBN`),
  KEY `fk_Version_Libro1_idx` (`Libro_id`),
  CONSTRAINT `fk_Version_Libro1` FOREIGN KEY (`Libro_id`) REFERENCES `Libro` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Version`
--

LOCK TABLES `Version` WRITE;
/*!40000 ALTER TABLE `Version` DISABLE KEYS */;
/*!40000 ALTER TABLE `Version` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-10 11:58:51
