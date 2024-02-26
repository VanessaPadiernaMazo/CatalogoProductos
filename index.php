<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include_once "nav.php"; ?>
    <ul class="cards">
      <?php $qry = $conn->query("SELECT m.Nombre as nombreM, m.Logo, p.id, p.Nombre, p.Talla, p.Observaciones, p.Cantidad_Inventario, p.Fecha_Embarque, p.Imagen, p.Marca FROM producto p INNER JOIN marca m ON m.id = p.Marca");
					while ($row = $qry->fetch_assoc()) : ?>
        <li>
          <a href="" class="card_">
            <img src="<?php echo 'img/productos/'.$row['Imagen'].'.png' ?>" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">                    
                <img class="card__thumb" src="<?php echo 'img/marcas/'.$row['Logo'].'.png' ?>" alt="" />
                <div class="card__header-text">
                  <h3 class="card__title"><?php echo $row['Nombre'] ?></h3>            
                  <span class="card__status">Marca: <?php echo $row['nombreM'] ?></span>
                </div>
                <div>
                  <button onclick="window.open('edit_producto.php?id=<?php echo $row['id']?>')" type="button" class="btn btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                  </button>
                  <button type="button"  onclick="alert('Este producto se eliminará'); window.open('procesos/deleteProducto.php?id=<?php echo $row['id']?>')" class="btn btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                    </svg>
                  </button>
                </div>
              </div>
              <p class="card__description">Talla: <?php echo $row['Talla'] ?></p>
              <p class="card__description">Observaciones: <?php echo $row['Observaciones'] ?></p>
              <p class="card__description">Cantidad de inventario: <?php echo $row['Cantidad_Inventario'] ?></p>
              <p class="card__description">Fecha de Embarque: <?php echo $row['Fecha_Embarque'] ?></p>
            </div>
          </a>      
        </li> 
        <?php endwhile; ?>
      </ul>
</body>
</html>
<?php include_once "footer.php"; ?>
<script>
     //alerta
     function ConfirmDelete()
    {
        var respuesta = confirm("¿Está seguro que desea eliminar este formador?");
        var id = <?php echo json_encode($row['id']);?>

        if (respuesta == true)
        {

        } else {
            return false;
        }
    }
</script>