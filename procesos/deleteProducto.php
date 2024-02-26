<?php 
include_once 'conexion.php';

if(isset($_GET['id'])){//si el id existe... eliminarlo

	$id = $_GET['id'];//El id que se obtiene al dar clic en el botón eliminar del crud

	$sql = "DELETE FROM producto WHERE id='$id'";
	$result=mysqli_query($conn, $sql);

	if(!$result){
        die("Query falló");
    }

    header("Location: ../index.php");
}
 ?>