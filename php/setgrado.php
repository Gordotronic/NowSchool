<?php 
include_once ('../database/utilidades_sql.php');
include_once ('utilidades.php');

// el if sera de tipo Booleano ( SI o NO) cuando solo hay variable 

if ($_POST) {
	
// el signo de interrogacion se pregunta si los datos estan vacios 
// Isset recupera una variable $_POST

	

	$curso=isset($_POST ['curso'])?
	$_POST['curso']:'';


	$ano=isset($_POST ['ano'])?
	$_POST['ano']:'';

	$fecha_de_inscripcion=isset($_POST ['fecha_de_inscripcion'])?
	$_POST['fecha_de_inscripcion']:'';

	$cupo=isset($_POST ['cupo'])?
	$_POST['cupo']:'';

	// la funcion que va a recibir los datos
    $email= $_SESSION ['email'];
    $result = get_colegioperfil($email);
    $datos=$result->fetch_assoc();
    $id_colegio=$datos ['id_colegio'];

	$result = set_grado( $curso,$ano, $fecha_de_inscripcion, $id_colegio, $cupo);



	header('Location:../formulariogrado.php');
}
 ?>