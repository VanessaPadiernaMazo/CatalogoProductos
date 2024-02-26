<?php
include_once 'procesos/conexion.php';
$qry = $conn->query("SELECT * FROM marca where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include_once 'formMarca.php';
?>