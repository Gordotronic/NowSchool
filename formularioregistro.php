<?php

include_once('php/utilidades.php');
include_once('database/utilidades_sql.php');


if (isset($_SESSION['email'])) {
	if ($_SESSION['rol']=='cliente'){
		header('location:index.php');
	die();
	}
}
  
include_once ('php/header.inc'); ?>
<div id="contenido">
	<div id="registro">
		<section class="clear">
			<form action="php/registro.php" method="post">
				<table>
				<h2>Crea tu cuenta</h2>
					<tr>
						<td>Nombres</td>
						<td ><input type="text" name="nombrec" placeholder="Ej: Juan Manuel" required ></td>
					</tr>
					<tr>
						<td>Apellidos</td>
						<td ><input type="text" name="apellidoc" placeholder="Ej: Martinez" required></td>
					</tr>
					<tr>
						<td>Tipo de Documento</td>
						<td>
							<select name="tipoid" unique>
								<option value="cc">Cedula de Ciudadania</option>
								<option value="ce">Cedula de Extranjeria</option>
								<option value="nit">NIT</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Numero de Documento</td>
						<td ><input type="text" name="numeroid" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td ><input type="email" name="email" placeholder="karla@nowschool.com" required></td>
					</tr>
					<tr>
						<td>Contraseña</td>
						<td><input type="password" name="contrasena" placeholder="********" required></td>
					</tr>
					<tr>
						<td>Confirme Su Contraseña</td>
						<td><input type="password" name="ccontrasena" placeholder="********" required></td>
					</tr>
					<tr>
						<td colspan="3"><font size="2">La contraseña debe ser de minimo 8 caracteres, contener un numero, una mayuscula y una minuscula</font></td>
					</tr>
					<tr>
						<td>Fecha de nacimiento</td>
						<td>
						<tr>
						<td>
							<input name="ano" placeholder="AÑO 1940-1998" type="number" min="1940" max="1998"  required="">
						</td>
						<td>
						<select name="mes" unique required="">
							<option value="01">Enero</option>
							<option value="02">Febrero</option>
							<option value="03">Marzo</option>
							<option value="04">Abril</option>
							<option value="05">Mayo</option>
							<option value="06">Junio</option>
							<option value="07">Julio</option>
							<option value="08">Agosto</option>
							<option value="09">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>
						</select>
						</td>
						<td>
							<input name="dia" placeholder="Dia 1-31" type="number" min="1" max="31"  required="">
						</td>
						</tr>
						</td>
					</tr>
					<tr>
						<td>Nacionalidad</td>
						<td><input type="text" name="nacionalidad" placeholder="Ej: Colombia" required></td>
					</tr>
					<tr>
						<td>Ciudad</td>
						<td ><input type="text" name="ciudad" placeholder="Ej: Bogota" required></td>
					</tr>
					<tr>
						<td>Localidad</td><td>
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
					<?php if (isset($_SESSION['rol'])=='admin') { ?>
					<tr>
						<td>Rol</td>
						<td>
							<select name="rol" unique>
								<option value="admin">Administrador</option>
								<option value="cliente">Cliente</option>
							</select>
						</td>
					</tr>
					<?php } ?>
					<tr>
						<td><button type="submit">Registrar</button></td>
					</tr>
				</table>
			</form>
		</section>
</div>	

<?php
include_once ('php/footer.inc');
?>