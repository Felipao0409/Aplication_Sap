<?php

    require("../config/connect.php");

    $id=$_GET['id_sap'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<!-- <div class="container-fluid">
      <div class="row">
        <Sidebar>
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
          <div class="position-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <i class="fas fa-home"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-laptop"></i> Equipment
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-users"></i> Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-clipboard-list"></i> Assignments
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-chart-bar"></i> Reports
                </a>
              </li>
            </ul>
          </div>
        </nav> -->

<h3>Selected Teams</h3>

<div class="table-responsive">
<table class="table table-striped table-sm table-hover">

<thead>

    <tr>
    <th>No</th>
    <th>Category</th>
    <th>Name</th>
    <th>Serial</th>
    <th>Asset</th>
    <th>Quantity</th>
    <th>Action</th>
    

    </tr>
</thead>

<tbody>


<?php


$contador=0;

$sql="SELECT es.id, ca.categoria, e.nombre, e.serial, e.asset, es.cantidad FROM equipos e  INNER JOIN categoria_equipo ca ON ca.id = e.id_categoria
INNER JOIN equipos_seleccionados es ON es.id_equipo=e.id WHERE es.id_sap='$id'";
$resultado = mysqli_query($connect, $sql);        
while ($datos=mysqli_fetch_array($resultado)){
    $contador++;



?>


    <tr>
        <td><?php echo $contador ?></td>
        <td><?php echo $datos["categoria"] ?></td>
        <td><?php echo $datos["nombre"] ?></td>
        <td><?php echo $datos["serial"] ?></td>
        <td><?php echo $datos["asset"] ?></td>
        <td><?php echo $datos["cantidad"] ?></td>
        <td><button onclick="quitar(<?php echo $datos['id'] ?>, '<?php echo $id ?>')" >Remove</button></td>
        
    </tr>

<?php 
} 
?>



</tbody>

</table>
</div>
<script>

    function quitar(id_equipo, id_sap){

        const confirmar = confirm("¿Está seguro que desea quitar el equipo?");

        if(confirmar === true)
            window.location.href="http://localhost:3000/controllers/quitar_equipo.php?id_equipo="+id_equipo+"&id_sap="+id_sap;
        else {
            return false;
        }

    }

</script>
    


<br>


                <button onclick="javascritp:window.location.href='/views/seleccionar_equipo.php?id_sap=<?php echo $id ?>'">Return</button>
                <button type="button" onclick="javascript:window.location.href='/controllers/ticket.php?id_sap=<?php echo $id ?>'" id="">Generate Ticket</button>


</body>


</html>