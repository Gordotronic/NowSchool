<?php
include_once ('php/header.inc');
?>
<div id= "contenido">

<section class="clear"><h2>Comentarios</h2>
			<form action="php/contactenos.php" method="post">
				<table>
					<p>Para nosotros, tu opinion es muy importante. Cualquier idea, sugerencia, colaboración o si ves cosas que crees que se deben mejorar o que te gustaría que se incluyeran en esta pagina web, utiliza el siguiente formulario de contacto.</p>
					<br><br>
					<tr>
						<td>Nombre</td>
						<td ><input type="nombre" name="nombre"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Asunto</td>
						<td><input type="text" name="asunto"></td>
					</tr>
					<tr>
						<td>Comentanos</td>
						<td><textarea name = "comentanos" placeholder="Escribe tu comentario" ></textarea></td>
					</tr>
					<tr>
						<td><button type="submit" >Enviar</button></td>
					</tr>
										
				</table>
					
			</form>
			</section>
</div>

<?php
include_once ('php/footer.inc');
?>