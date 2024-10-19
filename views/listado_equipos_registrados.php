<?php

$id=$_GET['id'];
require("../config/connect.php");


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
    
   <nav class="navbar barborder-bottom" style="background-color: #3c70f2;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/assets/img/logo.jpeg" width="100" height="50" class="d-inline-block align-text-top">
      
    </a>
    <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <!-- <button type="button" class="btn btn-sm btn-secondary">
                  Export
                </button> -->
              </div>
              <button
                id="darkModeToggle"
                class="btn btn-sm btn-secondary"
              >
                <i class="fas fa-moon"></i> Toggle Dark Mode
              </button>
            </div>
      </div>


  </div>
      </nav>

<div class="container-fluid">
<div class="row">



 <!-- Main content -->
    <main  class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h4 class="h2 mt-3">Registered equipment list</h4>
    <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">




<div class="btn-toolbar mb-2 mb-md-0">
<!-- <div class="btn-group me-2"> -->

</div>
</div>

<br>
<div class="table-responsive">
<button class="btn btn-sm btn-outline-secondary" onclick="javascritp:window.location.href='/views/formulario_registro.php?id_sap=<?php echo $id ?>'">Enter new team</button>
<br>
<br>
<table class="table table-striped table-sm table-hover ">
  
    <tr>
        <th>Team Category</th>
        <th>Name</th>
        <th>Serial</th>
        <th>Quantity</th>
        <th>Asset</th>
        <th>Entry Date</th>
        <th colspan="2">Action</th>
        
    </tr>

    <?php  

    
    $sql = "SELECT e.id, c.categoria,e.nombre,e.serial,e.cantidad,e.asset,e.fecha_ingreso FROM equipos e INNER JOIN categoria_equipo c ON e.id_categoria=c.id
WHERE 1  ";


$resultado = mysqli_query($connect, $sql);
while($data = mysqli_fetch_array($resultado)) {

    ?>
    <tr>
        <td><?php echo $data['categoria']?></td>
        <td><?php echo $data['nombre']?></td>
        <td><?php echo $data['serial']?></td>
        <td><?php echo $data['cantidad']?></td>
        <td><?php echo $data['asset']?></td>
        <td><?php echo $data['fecha_ingreso']?></td>
        <td><a href="../views/editar_equipo_registrado.php?id_equipo=<?php echo $data['id']?>&id_sap=<?php echo $id ?>">Edit</a></td>
        <td><a onclick="eliminar('<?php echo $data['id'] ?>')" >Delete</a></td>
     
    </tr>
<?php
  }
?>

</table>
</div>

    </div>
    </main>
</div>
</div>


<script>

    function eliminar(id){

        const confirmar = confirm("¿Está seguro que desea eliminar el registro?");

        if(confirmar === true)
            window.location.href="http://localhost:3000/controllers/eliminar_equipos.php?id_equipo=" + id;
        else {
            return false;
        }

    }

</script>


</body>
</html>