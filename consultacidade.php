<?php
$conn = mysqli_connect("localhost", "root", "", "unopar");
/*
$sql = mysqli_query($conn, "SELECT * from paciente");
*/
$estado = filter_input(INPUT_POST, 'estado');

$sql = mysqli_query($conn, "SELECT estado.idestado, cidade.idcidade, cidade.nomedesc FROM estado INNER JOIN cidade ON estado.idestado = cidade.idestado  WHERE estado.idestado LIKE '%$estado%' ORDER BY cidade.nomedesc");
while ($aux = mysqli_fetch_assoc($sql))
{
    $idci[] = utf8_encode($aux['idcidade']);
    $cidades[] = utf8_encode($aux['nomedesc']);
    
}
$trevas = array_combine($idci, $cidades);
echo json_encode($trevas,JSON_FORCE_OBJECT);
?>