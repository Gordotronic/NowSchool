<?php 

/*
establecer la recuperacion en las constantes para la conexion al motor 
de la base de datos y acceso a la base de datos que se necesita,
la funcion "require" recupera la informacion del archivo que esta establecido en los parametros 
*/
require ('credenciales_db.php');
/*
establecemos la conexion utilizando la clase MySqli estableciendo los datos recuperados anteriormente
*/
$MySqli = new MySqli (DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($MySqli, 'utf8');
/*
Si la conexion genera un error , lo recomendable es matar el proceso saliendo del archivo
*/
if ($MySqli -> connect_errno) {
	echo "No se pudo establecer la conexion";
	exit;
}

function set_registro ( $nombrec, $apellidoc, $tipoid,
$numeroid, $email , $contrasena , $fec_nac , $nacionalidad , $ciudad , $localidad , $rol ) {

	global $MySqli,$result;

	$datos_user = get_user_byid($email);

	

	// "!" Niega datos
	if(!$datos_user){

		$sql = "INSERT INTO cliente (nombrec, apellidoc, tipoid, numeroid, email,  fec_nac, nacionalidad, ciudad, localidad) VALUES ('{$nombrec}', '{$apellidoc}', '{$tipoid}', '{$numeroid}', '{$email}', '{$fec_nac}', '{$nacionalidad}' , '{$ciudad}' , '{$localidad}')";

		$MySqli -> query($sql);
		if ($MySqli)
		{
		// Funcion que genera la consulta
		if(!$rol)
		{
			$rol='cliente';
		}
		$result = set_user($email , $contrasena , $rol );
		}
	}
	else
	{
	echo "<SCRIPT language='javascript'>alert('El usuario ya existe');</SCRIPT>";
	}
	return $result;
}

function set_user ($email , $contrasena , $rol){

	global $MySqli;
	$sql = "INSERT INTO user (email , contrasena , rol) VALUES ('{$email}' , '{$contrasena}' , '{$rol}')";
	$MySqli -> query($sql);
}

function set_localidad($nombre , $descripcion){
	global $MySqli;
	$sql = "INSERT INTO localidades (nombre , descripcion) VALUES ('{$nombre}' , '{$descripcion}' ) ";
	return $MySqli -> query($sql);
}

function set_colegio ( $codigonit , $nombre ,$contrasena, $direccion ,$localidad, $telefono , $pagina_web , $email, $rol ) {
	global $MySqli;
	$datos_user = get_user_byid($email);
	// "!" Niega datos
	if(!$datos_user){
	
		$sql = "INSERT INTO colegios (codigonit ,  nombre , direccion, id_localidad, telefono , pagina_web , email) 
			VALUES ('{$codigonit}' ,  '{$nombre}' , '{$direccion}' ,'{$localidad}', '{$telefono}' , '{$pagina_web}' , '{$email}')";
		
		$MySqli -> query($sql);
		if ($MySqli)
		{
		// Funcion que genera la consulta
		if(!$rol)
		{
			$rol='colegio';
		}
		$result = set_user($email , $contrasena , $rol );

		}
}
}

function set_grado($curso ,$ano, $fecha_de_inscripcion,$id_colegio,$cupo)
{
	global $MySqli;
	$sql = "INSERT INTO grados(curso, fecha_de_inscripcion, ano,estado,cupo)VALUES('{$curso}' , '{$fecha_de_inscripcion}' ,'{$ano}','A','{$cupo}') ";
	
   $MySqli -> query($sql);
   $id= $MySqli->insert_id;

	$sql = "INSERT INTO colegio_grado (id_colegio, id_grado)VALUES({$id_colegio},".$id.") ";
	return $MySqli -> query($sql);

}

function set_contactenos($nombre ,$email, $asunto, $comentanos)
{
	global $MySqli;
	$sql = "INSERT INTO contactenos(nombre, email, asunto, comentanos)VALUES('{$nombre}' , '{$email}' ,'{$asunto}','{$comentanos}') ";
	return $MySqli -> query($sql);
}

function get_user_byid($email)
{
	global $MySqli;
	$sql = "SELECT email , contrasena , rol FROM user WHERE email='{$email}' "; 
	$result = $MySqli -> query($sql);
	return $result->fetch_assoc();
}

function get_grado ()
{
	global $MySqli;
	$sql = "SELECT * FROM grados ORDER BY curso DESC";
	return $MySqli -> query($sql); 
}
function get_gradocolegio ($id_colegio)
{
	global $MySqli;
	$sql = "SELECT curso,grados.id_grado, cupo FROM grados,colegios,colegio_grado WHERE colegio_grado.id_colegio = colegios.id_colegio and colegio_grado.id_grado = grados.id_grado and estado='A' ORDER BY curso DESC";
	
	return $MySqli -> query($sql); 
}

function get_cupo ()
{
	global $MySqli;
	$sql = "SELECT * FROM cupos ORDER BY id_cupo DESC";
	return $MySqli -> query($sql); 
}
function get_cliente ($cliente)
{
	global $MySqli;
	$sql = "SELECT * FROM cliente WHERE email='{$cliente}' limit 1";

	return $MySqli -> query($sql); 
}
function get_clienteperfil ($cliente)
{
	global $MySqli;
	$sql = "SELECT id_cliente, nombrec, apellidoc, numeroid,nacionalidad, ciudad, localidad, nombre FROM cliente, localidades WHERE email='{$cliente}' and localidad= id_localidad limit 1";

	return $MySqli -> query($sql); 
}
function get_colegioperfil ($email)
{
	global $MySqli;
	$sql = "SELECT * FROM colegios WHERE email='{$email}'";

	return $MySqli -> query($sql); 
}



function get_colegios ($colegios)
{
	global $MySqli;
	$sql = "SELECT * FROM colegios ORDER BY id_colegio DESC limit 1";
	return $MySqli -> query($sql); 
}

function get_colegio ($colegio)
{
	global $MySqli;
	$sql = "SELECT * FROM colegios ORDER BY id_colegio DESC ";
	return $MySqli -> query($sql); 
}

function get_localidades ()
{
	global $MySqli;
	$sql = "SELECT * FROM localidades ORDER BY id_localidad ASC ";
	
	return $MySqli -> query($sql); 

}


function get_colegiosinlogin ()
{
	global $MySqli;
	$sql = "SELECT * FROM colegios ORDER BY id_colegio DESC ";
	return $MySqli -> query($sql); 
}

function upd_perfil ($nacionalidad , $ciudad , $localidad, $_id_cliente)
{
	global $MySqli;
	$sql = "UPDATE cliente SET nacionalidad='{$nacionalidad}', ciudad='{$ciudad}', localidad='{$localidad}' WHERE _id_cliente=$_id_cliente limit 1";
	return $MySqli -> query($sql); 
}

function upd_colegio ($telefono , $email , $id_colegio)
{
	global $MySqli;
	$sql = "UPDATE colegios SET telefono='{$telefono}', email='{$email}'WHERE id_colegio=$id_colegio limit 1";
	return $MySqli -> query($sql); 
}
function upd_contrasena ($contrasena , $email)
{
	global $MySqli;
	$sql = "UPDATE user SET contrasena='{$contrasena}' WHERE email='{$email}' limit 1";
	echo $sql;
	return $MySqli -> query($sql); 
}


 ?>
