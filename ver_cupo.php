<?php
include_once ('php/header.inc');
include_once ('php/utilidades.php');
include_once ('database/utilidades_sql.php');

$email= $_SESSION['email'];
$result=get_colegioperfil($email);

						$dato=$result->fetch_assoc();

						$id_colegio= $dato['id_colegio'];

						$result= get_gradocolegio($id_colegio);

						

?>

<div class="vista_colegio">
	
	
			<table class="formatabla" >
				<thead>
					<td colspan="2" align="center">
					<h3>Cupos disponibles</h3>
					<hr>
					
						

					</td>

				</thead>
				<tbody>
					<tr class='formatablatr1' align ='center'>
						<td><h4>Curso:</h4></td><td><h4>Cupos disponibles:</h4></td>
					</tr>	
						<?php

						while ($datos=$result->fetch_assoc()) {
							# code...
						
						
							echo "<tr class= 'formatablatr0' ><td><label>".$datos['curso']."
							</label></td><td><label>".$datos['cupo']."</label></td></tr>";

						
						}?>
					
						
				</tbody>

			</table>
	
	

</div>

<?php
include_once ('php/footer.inc');

?>