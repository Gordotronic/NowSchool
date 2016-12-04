<?php
include_once('database/utilidades_sql.php');
include_once ('php/header.inc');

?>

<?php
while($row=mysql_fetch_row($resSql)){
       //la estructura será 'Nombre campo'=> posición del arreglo y la información
       $data[]=array('Id'=>$row[0], 'Nombre'=>$row[1],'Paterno'=>$row[2],'Materno'=>$row[3]);
}
$titles=array('Id'=>'Id', 'Nombre'=>'Nombre','Paterno'=>'Paterno','Materno'=>'Materno');

$pdf->ezTable($data);
$pdf->ezStream();
?>



<?php
include_once ('php/footer.inc');

?>