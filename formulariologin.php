
<?php
include_once ('php/header.inc');
?>
<div id= "contenido">

<section class="clear"><h2>Iniciar sesion</h2>
			<form action="php/login.php" method="post">
				<table>
					<tr>
						<td>Email</td>
						<td ><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Contraseña</td>
						<td><input type="password" name="contrasena"></td>
					</tr>
					<tr>
						<td><button type="submit" >Ingresar</button></td>
					</tr>
										
				</table>
					
			</form>
			</section>
</div>

<?php
include_once ('php/footer.inc');
?>