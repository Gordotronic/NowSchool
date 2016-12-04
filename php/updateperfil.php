
<?php 
include_once ('../database/utilidades_sql.php');

if ($_POST) {

	$id_cliente=isset($_POST ['cliente'])?
	$_POST['cliente']:'';

	$nacionalidad=isset($_POST ['nacionalidad'])?
	$_POST['nacionalidad']:'';

	$ciudad=isset($_POST ['ciudad'])?
	$_POST['ciudad']:'';

	$localidad=isset($_POST ['localidad'])?
	$_POST['localidad']:'';


$result = upd_perfil( $nacionalidad , $ciudad , $localidad,$id_cliente);
if($result){

		ob_start();
		header('refresh:0 url=../ver_perfil.php');	
		echo "<SCRIPT language='javascript'>alert('Usuario Actualizado exitosamente');</SCRIPT>";	
		ob_end_flush();
	}
	else{
		header('location:../ver_perfil.php');
	}	
die();
}
?>