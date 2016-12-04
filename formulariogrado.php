<?php
include_once ('php/header.inc');

?>
<div id ="contenido">
	<section>
		<form action="php/setgrado.php" method="POST">
			<table>
				<thead>
					<td colspan="2">
						<h3>Agregar un Grado</h3>
					</td>
				</thead>
				<tbody>
					<tr>
						<td><h4>Curso:</h4></td>
						<td><select name="curso">
							<option value="preescolar">Preescolar</option>
							<option value="primero">Primero</option>
							<option value="segundo">Segundo</option>
							<option value="tercero">Tercero</option>
							<option value="cuarto">Cuarto</option>
							<option value="quinto">Quinto</option>
							<option value="sexto">Sexto</option>
							<option value="septimo">Septimo</option>
							<option value="octavo">Octavo</option>
							<option value="noveno">Noveno</option>
							<option value="decimo">Decimo</option>
							<option value="undecimo">Undecimo</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><h4>Año:</h4></td><td><input min="2017" type="number" name="ano"></td>
					</tr>
					<tr>
						<td><h4>Fecha de Inscripcion:</h4></td><td><input max="2017-01-01" type="date" name="fecha_de_inscripcion" placeholder="AAAA-MM-DD"></td>
					</tr>
					<tr>
					<td><h4>Numero de cupo</h4></td><td><input min ="0" type="number" name="cupo"></td>
					</tr>
					<tr>
						<td><button type="submit">Salvar</button><td>
					</tr>
				</tbody>

			</table>
		</form>
	</section>

</div>

<?php
include_once ('php/footer.inc');

?>