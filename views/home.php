<?php

require ('../config/connect.php');

$id=$_GET['id_sap'];


$sql="SELECT * FROM usuario WHERE id_sap='$id'";
$resultado = $connect->query($sql);

if ($resultado->num_rows > 0) {
    // Salida de datos de la fila
    $row = $resultado->fetch_assoc();
} else {
    echo "0 resultados";
}


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


      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome</h1>
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

          
          <div class="row">
            <div class="col-md-6">
              <div class="card  card-home">
                <div class="card-body">
                <h2 class="mt-4">User</h2>
                  
    <p>  
    <strong>SAP: </strong><?php echo $row['id_sap']; ?><br>
    <strong>Name: </strong><?php echo $row['nombre']; ?><br>
    <strong>City: </strong><?php echo $row['ciudad']; ?><br>    
    <strong>Email: </strong><?php echo $row['correo']; ?><br>
    <strong>Fecha: </strong><?php  echo date ('Y/m/d' ); ?><br>

    </p>
                </div>
              </div>
            </div>


            <div class="col-md-6">
            
              <div class="card  card-home ">
                <div class="card-body">
                <h2 class="mt-4">Recent Assignments</h2>
                  <h5 class="card-title">Return</h5>
                  <p class="card-text">
                    Monitor (ID: 1007) returned by Sarah Lee
                  </p>
                  <small class="text-muted">1 day ago</small>
                  
                  <h5 class="card-title">New Assignment</h5>
                  <p class="card-text">
                    Laptop (ID: 1006) assigned to Mark Johnson
                  </p>
                  <small class="text-muted">2 hours ago</small>
                </div>
              </div>
            </div>
          </div>







          <h2 class="mt-4">Equipment Assigment</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
              <thead>
                <tr>
                <th>No</td>
                <th>Category</th>
                <th>Team Name</th>
                <th>Serial</th>
                <th>Amount</th>
                <th>Asset</th>
                <th>Delivery date</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>     

              <?php

$sql="SELECT t.id, c.categoria, e.nombre, e.serial, t.cantidad, e.asset, t.fecha FROM tickets t INNER JOIN equipos e ON t.id_equipo=e.id
INNER JOIN categoria_equipo c ON e.id_categoria=c.id WHERE t.id_sap='$id' AND t.estado=0 ";

$result = mysqli_query($connect, $sql);

$contador=0;

while ($data=mysqli_fetch_array($result)){ 
    $contador++;

    ?>

        <tr>
            <td><?php echo $contador?></td>
            <td><?php echo $data['categoria']?></td>
            <td><?php echo $data['nombre']?></td>
            <td><?php echo $data['serial']?></td>
            <td><?php echo $data['cantidad']?></td>
            <td><?php echo $data['asset']?></td>
            <td><?php echo $data['fecha']?></td>
            <td><button class="btn btn-sm btn-outline-secondary" onclick="finalizar(<?php echo $data['id'] ?>, '<?php echo $id?>' )">Finalizar</button></td>
</tr>
<?php
}
?>


              </tbody>
            </table>
          </div>


          <h2 class="mt-4">History Equipment Assigment</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
              <thead>
                <tr class="users">
                <td>No</td>
                <td>Category</td>
                <td>Team Name</td>
                <td>Serial</td>
                <td>Amount</td>
                <td>Asset</td>
                <td>Loan Date</td>
                <td>return Date</td>
        
                </tr>
              </thead>
              <tbody>     

              <?php

$sql="SELECT t.id, c.categoria, e.nombre, e.serial, t.cantidad, e.asset, t.fecha, t.fecha_devolucion FROM tickets t INNER JOIN equipos e ON t.id_equipo=e.id
INNER JOIN categoria_equipo c ON e.id_categoria=c.id WHERE t.id_sap='$id' AND t.estado=1 ";

$result = mysqli_query($connect, $sql);

$contador=0;

while ($data=mysqli_fetch_array($result)){ 
$contador++;

?>

    <tr>
        <td><?php echo $contador?></td>
        <td><?php echo $data['categoria']?></td>
        <td><?php echo $data['nombre']?></td>
        <td><?php echo $data['serial']?></td>
        <td><?php echo $data['cantidad']?></td>
        <td><?php echo $data['asset']?></td>
        <td><?php echo $data['fecha']?></td>
        <td><?php echo $data['fecha_devolucion']?></td>
</tr>
<?php
}
?>


              </tbody>
            </table>            
          </div>
<br>
<br>

      </main>
</div>
</div>

<script src="../assets/js/actions-buttons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




<script>
    function finalizar(id,id_sap){
            const confirma=confirm("Desea confirmar la devolucion del equipo? ")
                if(confirma===true){
                    window.location.href="/controllers/devolucion_equipo.php?id_ticket="+id+"&id_sap="+id_sap
                    return true;
                }else{
                    return false;
                }    
    }
</script>    


  