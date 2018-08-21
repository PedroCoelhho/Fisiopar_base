<?php
// Passar pro crud
$conn=mysqli_connect('localhost','root','','fisiopar')
    or die("Erro ao conectar".mysqli_errno());

$request=$_REQUEST;
$col =array(
    0   =>  'idPaciente',
    1   =>  'nome',
    2   =>  'dataNasc',
    3   =>  'sexo',
    4   =>  'convenio'
);

$sql ="SELECT idPaciente, nome, sexo, dataNasc, convenio FROM paciente";
$query=mysqli_query($conn,$sql);

$total_dados=mysqli_num_rows($query);

$totalFilter=$total_dados;

$sql ="SELECT idPaciente, nome, dataNasc, sexo, convenio FROM paciente WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (idPaciente Like '".$request['search']['value']."%' ";
    $sql.=" OR nome Like '".$request['search']['value']."%' ";
    $sql.=" OR dataNasc Like '".$request['search']['value']."%' ";
    $sql.=" OR sexo Like '".$request['search']['value']."%' ";
    $sql.=" OR convenio Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($conn,$sql);
$total_dados=mysqli_num_rows($query);


$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($conn,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0]; 
    $subdata[]=$row[1]; 
    $subdata[]=$row[2]; 
    $subdata[]=$row[3];
    $subdata[]=$row[4];
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($total_dados),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);
echo json_encode($json_data);
?>
