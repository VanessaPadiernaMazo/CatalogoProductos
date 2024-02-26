<?php include_once "procesos/conexion.php"; ?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fst-italic fw-lighter">Vanessa Padierna Mazo</a>
            <div class="collapse navbar-collapse justify-content-end nav-pills" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link me-4" id="crear" href="formProducto.php?id=crearP">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>    
                    Crear Nuevo Producto</a>
                    <a class="nav-link me-4 active" id="productos" href="index.php?id=productos">Productos</a>
                    <a class="nav-link me-4" id="marcas" href="marcas.php?id=marcas">Marcas</a>
                </div>
            </div>
        </div>
    </nav>

<script>
    var temasVistosId = window.location.search;
    var botonC = document.querySelector("#crear");
    var botonP = document.querySelector("#productos");
    var botonM = document.querySelector("#marcas");
    if(temasVistosId == '?id=productos') {
      botonP.setAttribute('class', 'nav-link me-4 active');
      botonM.setAttribute('class', 'nav-link me-4');
      botonC.setAttribute('class', 'nav-link me-4');
      botonC.innerText ='Crear Nuevo Producto';
      botonC.setAttribute('href', 'formProducto.php?id=crearP');
    }
    if(temasVistosId == '?id=marcas') {
      botonP.setAttribute('class', 'nav-link me-4');
      botonM.setAttribute('class', 'nav-link me-4 active');
      botonC.setAttribute('class', 'nav-link me-4');
      botonC.innerText ='Crear Nueva Marca';
      botonC.setAttribute('href', 'formMarca.php?id=crearM');
    }
    if(temasVistosId == '?id=crearP') {
      botonP.setAttribute('class', 'nav-link me-4');
      botonM.setAttribute('class', 'nav-link me-4');
      botonC.setAttribute('class', 'nav-link me-4 active');
      botonC.innerText ='Crear Nuevo Producto';
      botonC.setAttribute('href', 'formProducto.php?id=crearP');
    }
    if(temasVistosId == '?id=crearM') {
      botonP.setAttribute('class', 'nav-link me-4');
      botonM.setAttribute('class', 'nav-link me-4');
      botonC.setAttribute('class', 'nav-link me-4 active');
      botonC.innerText ='Crear Nueva Marca';
      botonC.setAttribute('href', 'formMarca.php?id=crearM');
    }
</script>