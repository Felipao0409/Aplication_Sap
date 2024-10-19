<?php

// error_reporting(0);

$id=$_GET['id_sap'];
$id_page=$_GET['id_page'];

$id_equipo=$_GET['id_equipo'];
$new=$_GET['new'];
$edit=$_GET['edit'];


?>

<html>
  <head>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TechInventory - Company Equipment Management</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/styles.css">
    </head>
  <body>

    <div class="container-fluid">
      <div class="row">

      <?php require('../views/menu.php');  ?>



    <!-- Main content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><?php echo $id_page==1 ? "Welcome": $id ?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Export
                </button>
              </div>
              <button
                id="darkModeToggle"
                class="btn btn-sm btn-outline-secondary"
              >
                <i class="fas fa-moon"></i> Toggle Dark Mode
              </button>
            </div>
      </div>


    <?php

      

      

        if($id_page==2 && $new<>1 && $edit<>1) 
            require('../views/listado_equipos_registrados.php');

            if($id_page==2 && $new==1)
            require('../views/formulario_registro.php');
            if($id_page==2 && $edit==1)
            require("../views/editar_equipo_registrado.php");

        



    ?>

    
    </main>


      </div>
    </div>

    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/actions-buttons.js">
  


    </script>

  </body>
</html>