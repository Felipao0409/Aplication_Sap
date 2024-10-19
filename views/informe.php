<?php

$id=$_GET['id_sap'];
require("../config/connect.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
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
        <h1 class="h2"><?php echo $id ?></h1>
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

    <h3>Loan Equipment Report</h3>

    <label>ID SAP</label>
    <input type="text" name="id_usario" value="">
    <button class="btn btn-sm btn-outline-secondary" onclick="javascritp:window.location.href='/views/formulario_registro.php'">search</button>
    <button class="btn btn-sm btn-outline-secondary" onclick="javascritp:window.location.href='/views/formulario_registro.php'">Export</button>
    <button class="btn btn-sm btn-outline-secondary" onclick="javascritp:window.location.href='/index.php'">Return</button>
    <br>
    <br>



    <div class="table-responsive">
    <table class="table table-striped table-sm table-hover">
        <tr>

            <th>No</th>
            <th>Id Sap</th>
            <th>User Name</th>
            <th>Team Id</th>
            <th>Team Category</th>
            <th>Team Name</th>
            <th>Serial</th>
            <th>Asset</th>
            <th>Quantity</th>
            <th>Date Borrowed</th>
            <th</th>

        </tr>

        <?php
        // el id_sap y el nombre del usuario lo traemos de la tabla usuario//
        // id equipo,  nombre, serial, asset tabal equipos//
        // cantidad fecha prestamo tabla tickets//
        // categoria tabla categoria equipos//

        $sql = "SELECT u.id_sap, u.nombre, t.id, c.categoria, e.nombre, e.serial, e.asset, t.cantidad, t.fecha FROM tickets t INNER JOIN equipos e ON t.id_equipo=e.id
INNER JOIN categoria_equipo c ON e.id_categoria=c.id WHERE t.id_sap='$id' AND t.estado=0 ";

        $result = mysqli_query($connect, $sql);

        $contador = 0;

        while ($data = mysqli_fetch_array($result)) {
            $contador++;

        ?>
            <tr>
                <td><?php echo $contador ?></td>
                <td><?php echo $data['id_sap'] ?></td>
                <td><?php echo $data['nombre_usuario'] ?></td>
                <td><?php echo $data['id_equipo'] ?></td>
                <td><?php echo $data['categoria'] ?></td>
                <td><?php echo $data['nombre_equipo'] ?></td>
                <td><?php echo $data['serial'] ?></td>
                <td><?php echo $data['asset'] ?></td>
                <td><?php echo $data['cantidad'] ?></td>
                <td><?php echo $data['fecha_prestamo'] ?></td>

            </tr>
        <?php
        }
        ?>

    </table>
    </div>
    
</main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/actions-buttons.js"></script>
  
</body>
</html>