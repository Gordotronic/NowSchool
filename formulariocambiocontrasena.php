<?php
include_once ('database/utilidades_sql.php');
include_once ('php/header.inc');
?>


    <div class="vista_colegio">

<form action="php/cambiar_contrasena.php" method="post"> 
            <label>Nueva contraseña:</label><br /> 
            <input type="password" name="contrasena" maxlength="15" /><br /> 
            <label>Confirmar:</label><br /> 
            <input type="password" name="ccontrasena" maxlength="15" /><br /> 
            <button type="submit" name="cambio_contrasena">Enviar</button> 
        </form>

</div>

<?php
include_once ('php/footer.inc');


?>