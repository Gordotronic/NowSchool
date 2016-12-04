<?php
include_once ('php/header.inc');
?>
<?php 

include_once('database/utilidades_sql.php');

$result = get_colegio ($_SESSION['email']);
?>
<div id="contenedor_vista_colegio">


    <div class="vista_colegio">
    <?php while ($datos_colegio = $result -> fetch_assoc()) {
?>
    

    <form action="ver_cupo.php">
    
	<table class="formatabla" >
	    <tr>
		    <td colspan="5" align ="center"><?php 
	    		
	    		echo $datos_colegio['nombre'];
	    		?>
	    	</td>
	    </tr>
	    <tr>
	    		<td colspan="5">
	    		<hr>
	    		</td>

	    </tr>

	    <tr class='formatablatr1' align="center">
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
			
		
			<td colspan='5'>
		  				<a href='ver_cupo.php'><button type='submit'>Consultar Cupos</a></button>
			</tr>";


?>
	</table>
	</form>
	
<?php } ?>
        <!--"<img class='vista_preview' src='".$datos_colegio['imagen']. "' /><p class='vista_texto'>".$datos_colegio ['nombre']."</p><button class='consultarcolegio' value=".$datos_colegio['id_colegio'].">Consultar</button>";-->
    

 </div>

</div>

<?php
include_once ('php/footer.inc');
?>