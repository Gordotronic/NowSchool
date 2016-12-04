<?php
include_once ('php/header.inc');
?>
<?php 

include_once('database/utilidades_sql.php');

$result = get_colegios ($_SESSION['email']);
?>
<div id="contenedor_vista_colegio">
    <div class="vista_colegio"><br>
    <form method="POST" action="php/updatecolegio.php">
	    <table class="formatabla">
	    <tr>
		    <td colspan="5" align="center">
		  <?php 
	    		$datos_colegios = $result -> fetch_assoc();
	    		echo $datos_colegios['nombre'];
	    		?>  <hr>
	    	</td>
	    </tr>
	    <tr>
	    	<td>Codigo o Nit</td>
	    	<td>Direccion</td>
	    	<td>Telefono</td>
	    	<td>Pagina Web</td>
	    	<td>Email</td>
	    	
	    </tr>
    <?php
        echo "<tr class='formatablatr0'>


           <td>".$datos_colegios['codigonit']. "</td>
           <td>".$datos_colegios['direccion'] ."</td>
	        <td><input name='telefono' value='".$datos_colegios['telefono']."'></td>
	        <td>".$datos_colegios['pagina_web']."</td>
			<td><input name='email' value='".$datos_colegios['email']."'></td>
		    </tr>";

?>


        <!--"<img class='vista_preview' src='".$datos_colegio['imagen']. "' /><p class='vista_texto'>".$datos_colegio ['nombre']."</p><button class='consultarcolegio' value=".$datos_colegio['id_colegio'].">Consultar</button>";-->
    
</table>
</form>
</div>
</div>




<?php
include_once ('php/footer.inc');
?>