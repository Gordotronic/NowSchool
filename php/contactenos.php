<?php
include_once ('../database/utilidades_sql.php');

if ($_POST) {
	
	$nombre=isset($_POST ['nombre'])?
	$_POST['nombre']:'';

	$email=isset($_POST ['email'])?
	$_POST['email']:'';

	$asunto=isset($_POST ['asunto'])?
	$_POST['asunto']:'';

	$comentanos=isset($_POST ['comentanos'])?
	$_POST['comentanos']:'';

	$result = set_contactenos( $nombre,$email, $asunto, $comentanos);
        
        header('refresh:0 url=../index.php'); 
        echo "<SCRIPT language='javascript'>alert('Gracias por tus comentarios. Los tendremos en cuenta para mejorar nuestro servicio.');</SCRIPT>";    
}

?>