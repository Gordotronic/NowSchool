<?php
include_once('database/utilidades_sql.php');
include_once ('php/header.inc');

?>
<div id ="contenido">
	<section>
		<form action="php/setcolegio.php" method="POST">
			<table>
				<thead>
					<td>
						<h3>Colegios</h3>
					</td>
				</thead>
				<tbody>
					<tr>
						<td><h4>Codigo-nit:</h4></td><td><input type="text" name="codigo_nit" required=""></td>
					</tr>
					<tr>
						<td><h4>Nombre:</h4></td><td><input type="text" name="nombre" required=""></td>
					</tr>
					<tr>
						<td><h4>Contraseña</h4></td>
						<td><input type="password" name="contrasena" placeholder="********" required></td>
					</tr>
					<tr>
						<td colspan="2"><font size="2">La contraseña debe ser de minimo 8 caracteres, contener un numero, una mayuscula y una minuscula</font></td>
					</tr>
					<tr>
						<td><h4>Confirme Contraseña</h4></td>
						<td><input type="password" name="ccontrasena" placeholder="********" required></td>
					</tr>
					<tr>
						<td><h4>Direccion:</h4></td><td><input type="text" name="direccion" required=""></td>
					</tr>
					<tr>
					<td><h4>Localidad:</h4></td>
					<td>
					<?php 
					$result= get_localidades();
					echo "<select name='localidad'>";
					while($datos_localidades=$result->fetch_assoc())
					{
						echo "<option value='".$datos_localidades['id_localidad']."'>".$datos_localidades['nombre']."</option>";				
					}	
					echo '</select>';
					?>
					</td>
					</tr>
					<tr>
						<td><h4>Telefono:</h4></td><td><input type="text" name="telefono" required=""></td>
					</tr>
					
					<tr>
						<td><h4>Pagina web:</h4></td><td><input type="text" name="pagina_web"></td>
					</tr>
					<tr>
						<td><h4>Email:</h4></td><td><input type="text" name="email" required=""></td>
					</tr>
					<tr>
						<td><button type="submit">Salvar</button></td>
					</tr>
				</tbody>

			</table>
		</form>
	</section>

</div>

<?php
include_once ('php/footer.inc');

?>