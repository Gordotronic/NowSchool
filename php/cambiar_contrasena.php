<?php 
include_once ('../database/utilidades_sql.php');
include_once ('utilidades.php');
include_once('validacion.php');

    // incluímos los datos de conexión a la BD 
if ($_POST)    {

    $contrasena=isset($_POST ['contrasena'])?
    $_POST['contrasena']:'';

    $ccontrasena=isset($_POST ['ccontrasena'])?
    $_POST['ccontrasena']:'';

    $email=$_SESSION['email'];



        if($contrasena!==$ccontrasena)
{
    echo "<SCRIPT language='javascript'>alert('Las contraseñas no coinciden');</SCRIPT>";
    header('refresh:0 url=../formularioregistro.php');  
    die();
}
    else
    {
        
        $resultado=validacion($contrasena);

        if ($resultado==1){

    // la funcion que va a recibir los datos
            $contrasena=password_hash($contrasena , PASSWORD_DEFAULT); 
    $result = upd_contrasena($contrasena, $email);
}
else{
        echo "<SCRIPT language='javascript'>alert('La contrasena no cumple con los parametros ()');</SCRIPT>";
        header('refresh:0 url=../formularioregistro.php');  
        die();
}
// "!" Sentencia de negacion
// el if sera de tipo Booleano ( SI o NO) cuando solo hay variable 

    if(!$result){

// "ob_start" es un ciclo 
        ob_start();
        
        //echo "<h3>Usuario creado exitosamente<h3>";
        header('refresh:0 url=../formulariologin.php'); 
        echo "<SCRIPT language='javascript'>alert('Usuario creado exitosamente');</SCRIPT>";    
        ob_end_flush();
        die();
    }

    else{

//Redirecciona al archivo establecido en el parametro location
        $_SESSION ['usuario'] = $email;
        $_SESSION ['rol'] = $rol;
        header('location:../index.php');
    }   
// termina la ejecucion del archivo

    }

            
}
?>
