<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Inventario</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
    </style>

  </head>
  <body class="bg-light">
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Proyecto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="inventario.php">Inventario</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
    <br><br>
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="img/invent.png" alt="" width="72" height="57">
          <h2>Inventario</h2>
          <p class="lead">
            ---
          </p>
        </div>

<?php

$total = 0;
//id, clave, nombre, costo
$id_array[]="1";$clave_array[]="A222";$nombre_array[]="Coca";$costo_array[]="15.5";
$id_array[]="2";$clave_array[]="A333";$nombre_array[]="Fanta";$costo_array[]="13.5";
$id_array[]="3";$clave_array[]="A444";$nombre_array[]="Jarritos";$costo_array[]="10.5";
$array_num = count($id_array);

?>

        <div class="row g-5">
       
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Inventario Actual</span>
              <span class="badge bg-primary rounded-pill"><?php echo $array_num; ?></span>
            </h4>
            <ul class="list-group mb-3" style="overflow: scroll; height: 450px;">

              <?php 
              
                $i=0;
                while($i<$array_num)
                {   

                
                        $id = $id_array[$i];
                        $clave = $clave_array[$i];
                        $nombre = $nombre_array[$i];
                        $costo = $costo_array[$i];
                        $total += $costo;
                        ?>
                          <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                              <h6 class="my-0">
                                <a href="inventario.php?borrar=<?php echo $id; ?>">
                                  <img src="img/borrar.jpg" width="20" height="20"> 
                                </a>
                                <?php echo $nombre; ?>
                              </h6>
                              <small class="text-muted"><?php echo "<b>N°.".$clave."</b>"; ?></small>
                            </div>
                            <span class="text-muted"><?php echo "$".$costo; ?></span>
                          </li>
                        <?php
                $i=$i+1;  
                }
                  
              ?>
            </ul>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (MXN)</span>
                <strong><?php echo "$".$total; ?></strong>
              </li>
            </ul>

          </div>


          <!-- ----------------------------------------------------------------------------------------------------------------- -->
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Nuevo Producto</h4>
            <form method="POST" name="producto" class="needs-validation">
              <div class="row g-3">

                <div class="col-sm-6">
                  <label for="clave" class="form-label">Clave | Código</label>
                  <input type="text" class="form-control" id="clave" name="clave" placeholder="" value="" required>
                </div>

                <div class="col-sm-6">
                  <label for="costo" class="form-label">Fecha | Hora</label>
                  <input type="text" class="form-control" value="<?php echo date("d/m/Y | h:i:s");?>" disabled>
                </div>

                <div class="col-12">
                  <label for="nombre" class="form-label">Nombre</label> 
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
                </div>

                <div class="col-sm-6">
                  <label for="tipo" class="form-label">Tipo de Producto</label>
                  <select class="form-select" id="tipo" name="tipo" required>
                    <option value="">-- Selecciona Uno --</option>
                    <option value="1">Perecedero</option>
                    <option value="2">Imperecedero</option>
                  </select>
                </div>

                <div class="col-sm-6">
                  <label for="costo" class="form-label">Costo <span class="text-muted">(c/u)</span></label>
                  <input type="text" class="form-control" id="costo" name="costo" placeholder="" value="" required>
                </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="activo" id="activo">
                <label class="form-check-label" for="activo">Activar Producto</label>
              </div>

              <hr class="my-4">

              <input type="submit" name="registrar" id="registrar" class="w-100 btn btn-primary btn-lg" value="Registrar Producto">
            </form>
          </div>
          <!-- ----------------------------------------------------------------------------------------------------------------- -->

        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 <a href="http://utvt.edomex.gob.mx/" target="_blank">UTVT</a> &middot; <a href="#">Condiciones</a></p>
      </footer>
    </div>

    
  </body>
</html>
