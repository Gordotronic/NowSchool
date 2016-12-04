<?php 
include_once ('../database/utilidades_sql.php');

if ($_POST) {

	$id_colegios=isset($_POST ['colegios'])?
	$_POST['colegios']:'';

	$telefono=isset($_POST ['telefono'])?
	$_POST['telefono']:'';

	$email=isset($_POST ['email'])?
	$_POST['email']:'';

$result = upd_colegio( $telefono , $email , $id_colegios);
if($result){

		ob_start();
		header('refresh:0 url=../ver_colegioadmin.php');	
		echo "<SCRIPT language='javascript'>alert('Colegio Actualizado exitosamente');</SCRIPT>";	
		ob_end_flush();
	}
	else{
		header('location:../ver_colegioadmin.php');
	}	
die();
}
?>