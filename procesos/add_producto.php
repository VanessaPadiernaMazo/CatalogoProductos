<?php
$directorio = "../img/productos/";
$aleatorio = mt_rand(100, 999);
$ruta = "vistas/imagenes/usuarios/".$aleatorio.".png";
 
$nombre=$_FILES['imagen']['name'];
$guardado=$_FILES['imagen']['tmp_name'];
 
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
$id             = $_POST['id']; 
$nombre         = $_POST['nombre'];
$talla          = $_POST['talla'];
$marca          = $_POST['marca']; 
$inventario     = $_POST['inventario'];
$f_embarque     = $_POST['f_embarque'];
$observaciones  = $_POST['observaciones'];

if(empty($id)){
    $save = $conn->query("INSERT INTO producto(Nombre, Talla, Observaciones, Cantidad_Inventario, Fecha_Embarque, Imagen, Marca) VALUES ('$nombre','$talla','$observaciones','$inventario','$f_embarque','$aleatorio','$marca')");
}else{
    $save = $conn->query("UPDATE producto SET Nombre='$nombre',Talla='$talla',Observaciones='$observaciones',Cantidad_Inventario='$inventario',Fecha_Embarque='$f_embarque',Imagen='$aleatorio',Marca='$marca' WHERE id = $id");
}
if(!$save){
	die("Query falló");
}else{
	header("location: ../index.php");
}
?>