<?php 

include_once ('php/header.inc');
?>
<?php 

include_once('database/utilidades_sql.php');

$result = get_cliente($_SESSION['email']);
?>



<div id="contenedor_vista_cliente">
 <div class="vista_cliente"><br>
        

        <table class="formatabla" border="1">
        <tr><td colspan="9">
        <h3>Usuarios</h3>
        <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Tipo de Documento</td>
        <td>Numero</td>
        <td>Email</td>
        <td>Fecha de nacimiento</td>
        <td>Pais</td>
        <td>Ciudad</td>
        <td>Localidad</td>
        </tr>


<?php 
$j=1;
while ($datos_cliente = $result -> fetch_assoc()) {
    
    if ($j%2==0){
            echo "<tr class='formatablatr0'>
            <td>".$datos_cliente ['nombrec']."</td>
            <td>".$datos_cliente ['apellidoc']."</td>
            <td>".$datos_cliente ['tipoid']."</td>
            <td>".$datos_cliente ['numeroid']."</td>
            <td>".$datos_cliente ['email']."</td>
            <td>".$datos_cliente ['fec_nac']."</td>
            <td>".$datos_cliente ['nacionalidad']."</td>
            <td>".$datos_cliente ['ciudad']."</td>
            <td>".$datos_cliente ['localidad']."</td>
            </tr>";
     }else{
            echo "<tr class='formatablatr1'>
             <td>".$datos_cliente ['nombrec']."</td>
            <td>".$datos_cliente ['apellidoc']."</td>
            <td>".$datos_cliente ['tipoid']."</td>
            <td>".$datos_cliente ['numeroid']."</td>
            <td>".$datos_cliente ['email']."</td>
            <td>".$datos_cliente ['fec_nac']."</td>
            <td>".$datos_cliente ['nacionalidad']."</td>
            <td>".$datos_cliente ['ciudad']."</td>
            <td>".$datos_cliente ['localidad']."</td>
            </tr>";
        }
    $j++;
 } ?>
</table>
   
     
    </div>
</div>


<?php 
include_once ('php/footer.inc');
?>