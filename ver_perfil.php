
<?php 
include_once ('php/header.inc');

?>
<?php
include_once('database/utilidades_sql.php');

$result = get_clienteperfil ($_SESSION['email']);
?>

<div id="contenedor_vista_cliente">
 <div class="vista_cliente"><br>
 <form method="POST" action="php/updateperfil.php">
	    <table class="formatabla">
	    

	    <tr>
		    <td colspan="7">


		    <?php 
	    		$datos_cliente = $result -> fetch_assoc();
	    		echo $datos_cliente['nombrec']." ".$datos_cliente['apellidoc'];
	    		?>
            <hr>
	    	</td>


	    </tr>

	    		
	    <tr>
	    
	    <td>Identificacion</td>
	    <td>Nacionalidad</td>
	    <td>Ciudad</td>
	    <td>Localidad</td>
	    </tr>
<?php 
        echo "<tr class='formatablatr0'>
	       
	        <td>".$datos_cliente['numeroid']."</td>
	        <td><input name='nacionalidad' value='".$datos_cliente['nacionalidad']."'></td>
	        <td><input name='ciudad' value='".$datos_cliente['ciudad']."'></td>
	        <td><input name='localidad' value='".$datos_cliente['nombre']."'></td>
	        </tr>
	        <tr class='formatablatr0'>
 				<td colspan='7'> <button type='submit' name='cliente' value='".$datos_cliente['id_cliente']."'>Actualizar</button></td>
 </tr>";
 ?>
</table>
   </form>
     
    </div>
</div>


<?php 
include_once ('php/footer.inc');
?>