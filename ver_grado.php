<?php 

include_once ('php/header.inc');
?>
<?php 

include_once('database/utilidades_sql.php');

$result = get_grado();
?>

<div id="contenedor_vista_grado">
 <div class="vista_grado"><br>
	    <table class="formatabla">
	    <tr><td colspan="2">
	    <h4>Fechas de inscripcion</h4><td></tr>
	    <tr><td>Curso</td><td>fecha</td></tr>
	    <tr><td></td></tr>

<?php 
$j=1;
while ($datos_grado = $result -> fetch_assoc()) {
	
	if ($j%2==0){
	        echo "<tr class='formatablatr0'><td>".$datos_grado ['curso']."</td><td>".$datos_grado ['fecha_de_inscripcion']."</td></tr>";
	 }else{
	 		echo "<tr class='formatablatr1'><td>".$datos_grado ['curso']."</td><td>".$datos_grado ['fecha_de_inscripcion']."</td></tr>";
	 }
 	$j++;
 } ?>
</table>
   
     
    </div>
</div>


<?php 
include_once ('php/footer.inc');
?>