<?php
require_once 'vendor/autoload.php';
use Unopar\Core\Crud;
$limite = $_POST['limit'];
$pesquisa = Crud::select("SELECT * from paciente LIMIT $limite", []);

echo json_encode($pesquisa, JSON_FORCE_OBJECT);
?>