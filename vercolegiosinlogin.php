<?php
include_once ('php/header.inc');
?>
<?php 

include_once('database/utilidades_sql.php');

$result = get_colegiosinlogin ();
?>
<div id="contenedor_vista_colegio">

<?php while ($datos_colegio = $result -> fetch_assoc()) {
?>

    <div class="vista_colegio">
    <table class="formatabla" >
	    <tr>
		    <td colspan="4" align ="center"><?php 
	    		
	    		echo $datos_colegio['nombre'];
	    		?>
	    	</td>
	    </tr>
	    <tr>
	    		<td colspan="4">
	    		<hr>
	    		</td>

	    </tr>

	    <tr class='formatablatr0' align="center">
	    	<td>Direccion</td>
	    	<td>Telefono</td>
	    	<td>Pagina Web</td>
	    	<td>Email</td>
	    </tr>


    <?php
        echo "<tr class='formatablatr0'>
	        <td>".$datos_colegio['direccion']."</td>
	        <td>".$datos_colegio['telefono']."</td>
	        <td>".$datos_colegio['pagina_web']."</td>
			<td>".$datos_colegio['email']."</td>
		    </tr>";


?>

        <!--"<img class='vista_preview' src='".$datos_colegio['imagen']. "' /><p class='vista_texto'>".$datos_colegio ['nombre']."</p><button class='consultarcolegio' value=".$datos_colegio['id_colegio'].">Consultar</button>";-->
    
</table>
 </div>

</div>
<?php } ?>

<?php
include_once ('php/footer.inc');
?>