<?php
include_once 'procesos/conexion.php';
$qry = $conn->query("SELECT * FROM producto where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include_once 'formProducto.php';
?>