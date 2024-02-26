<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include_once "nav.php"; ?>
    <div class="row justify-content-center position-absolute top-50 start-50 translate-middle">
        <div class="col-auto">
            <div class="shadow bg-white p-5 rounded-5">
                <form action="procesos/add_producto.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
                    <div class="input-file">
                        <img id="file_upload" src="<?php echo isset($Imagen) ? 'img/productos/'.$Imagen.'.png' : 'img/placeholder-image.png' ?>" alt="your image" class="upload-img" />
                        <div class="input-file-upload">
                            <span class="upload-label">Imagen de Logo</span>
                            <input type='file' accept="image/*" name="imagen" onchange="readURL(this);" required value="<?php echo isset($Imagen) ? $Imagen : '' ?>"/>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <!-- ======================================================================== -->
                        <div class="col-6 border-right">
                            <label for="" class="control-label">Nombre de Producto</label>
                            <input type="text" name="nombre" class="form-control" required value="<?php echo isset($Nombre) ? $Nombre : '' ?>">
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">Talla</label>
                            <select name="talla" class="form-select">
                                <option value="0">Seleccionar talla</option>
                                <option value="S" <?php echo isset($Talla) ? 'selected' : '' ?>>S</option>
                                <option value="M" <?php echo isset($Talla) ? 'selected' : '' ?>>M</option>
                                <option value="L" <?php echo isset($Talla) ? 'selected' : '' ?>>L</option>
                            </select>
                        </div>
                        <div class="col-6 border-right">
                            <label for="" class="control-label">Marca</label>
                            <select name="marca" class="form-select">
                                <option value="0">Seleccionar Marca</option>
                                <?php
                                    $consulta = isset($Marca) ? "SELECT m.id, m.Nombre, m.Referencia FROM marca m INNER join producto p on m.id = p.Marca where p.id='$id'" :"SELECT id, Nombre, Referencia FROM marca";
                                    $query = mysqli_query($conn,$consulta);
                                    while ($valores = mysqli_fetch_assoc($query)) {  ?>
                                        <option value="<?php echo $valores['id'];?>"
                                            <?php echo isset($Marca) ? ' selected="selected"' : ''?>>
                                            <?php echo $valores["Nombre"].' (' .$valores["Referencia"].')' ?>
                                        </option>         			
                                    <?php }?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="control-label">Cantidad de Inventario</label>
                            <input type="number" class="form-control form-control-sm" name="inventario" required value="<?php echo isset($Cantidad_Inventario) ? $Cantidad_Inventario : '' ?>">
                        </div>
                        <div class="col-6 border-right">
                            <label for="" class="control-label">Fecha de Embarque</label>
                            <input type="date" name="f_embarque" class="form-control" required value="<?php echo isset($Fecha_Embarque) ? $Fecha_Embarque : '' ?>">
                        </div>
                        <div class="col-6">
                            <label class="control-label">Observaciones</label>
							<textarea name="observaciones" id="" cols="30" rows="4" class="form-control" required><?php echo isset($Observaciones) ? $Observaciones : '' ?></textarea>
                        </div>
                        <!-- ======================================================================== -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button class="btn btn-secondary" type="button" onclick="location.href = 'index.php'">Cancelar</button>
                        </div>
                        <!-- ======================================================================== -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php include_once "footer.php"; ?>
<script src="readImg.js"></script>