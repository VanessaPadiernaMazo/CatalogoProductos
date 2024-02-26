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
            <div class="shadow-lg bg-white p-5 text-center rounded-5">
                <form action="procesos/add_marca.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
                    <div class="input-file">
                        <img id="file_upload" src="<?php echo isset($Logo) ? 'img/marcas/'.$Logo.'.png' : 'img/placeholder-image.png' ?>" alt="your image" class="upload-img" />
                        <div class="input-file-upload">
                            <span class="upload-label">Imagen de Logo</span>
                            <input type='file' accept="image/*" name="logo" onchange="readURL(this);" required/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nombreMarca" class="form-label fw-bold">Nombre de Marca</label>
                        <input type="text" class="form-control" name="nombre" id="nombreMarca" required value="<?php echo isset($Nombre) ? $Nombre : '' ?>">
                    </div>
                    <div class="mb-3">
                        <label for="referenciaMarca" class="form-label fw-bold">Referencia de Marca</label>
                        <input type="text" class="form-control" name="referencia" id="referenciaMarca" required value="<?php echo isset($Referencia) ? $Referencia : '' ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button class="btn btn-secondary" type="button" onclick="location.href = 'marcas.php'">Cancelar</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php include_once "footer.php"; ?>
<script src="readImg.js"></script>