<?php
//servidor MySql  
$C_SERVER='localhost';  
//base de datos  
$C_BASE_DATOS='inscripciones';  
//usuario y contraseña de la base de datos mysql  
$C_USUARIO='root';  
$C_CONTRASENA='';  
//ruta archivo de salida   
//(el nombre lo componemos con Y_m_d_H_i_s para que sea diferente en cada backup)  
$C_RUTA_ARCHIVO = 'C:/xampp/htdocs/colegios/backups/';
$C_FILE=date("Y_m_d_H_i_s").'.sql';
//si vamos a comprimirlo  
$C_COMPRIMIR_MYSQL='true';  

//comando  
$command = "C:/xampp/mysql/bin/mysqldump -h".$C_SERVER." ".$C_BASE_DATOS." -u".$C_USUARIO."  >".$C_RUTA_ARCHIVO.$C_FILE; 
     echo $command;  
   	 echo "<SCRIPT language='javascript'>alert('Backup realizado con exito.');</SCRIPT>";
     header('refresh:3 url=../index.php');
   
//ejecutamos  
system($command);  
  
//comprimimos  
if ($C_COMPRIMIR_MYSQL == 'true') {  
 system('bzip2 "'.$C_RUTA_ARCHIVO.'"');  
} 
?>




