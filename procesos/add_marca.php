<?php
$directorio = "../img/marcas/";
$aleatorio = mt_rand(100, 999);
$ruta = "vistas/imagenes/usuarios/".$aleatorio.".png";
 
$nombre=$_FILES['logo']['name'];
$guardado=$_FILES['logo']['tmp_name'];
 
if(!file_exists($directorio )){
	mkdir($directorio ,0777,true);
	if(file_exists($directorio )){
 
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
		if(move_uploaded_file($guardado, $directorio.$aleatorio.".png")){
		echo "Archivo guardado con exito";
 
	}elseif(move_uploaded_file($guardado, $directorio.$aleatorio.".pdf")){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
 
	var_dump($ruta);
 
}
include_once "conexion.php";
$id          = $_POST['id'];
$nombre      = $_POST['nombre'];
$referencia  = $_POST['referencia'];

if(empty($id)){
    $save = $conn->query("INSERT INTO marca(Nombre, Referencia, Logo) VALUES ('$nombre','$referencia','$aleatorio')");
}else{
    $save = $conn->query("UPDATE marca set Nombre='$nombre', Referencia='$referencia', Logo='$aleatorio' WHERE id = $id");
}
if(!$save){
	die("Query falló");
}else{
	header("location: ../marcas.php");
}
?>