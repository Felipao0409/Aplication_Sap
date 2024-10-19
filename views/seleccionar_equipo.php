<?php



$categoria_equipo=$_GET["categoria_equipo"];

$id=$_GET['id_sap'];

if($id=="")
$id=$_POST['id_sap'];

require("../config/connect.php");

$add="";

if($categoria_equipo<>"")
    $add .=" and e.id_categoria='$categoria_equipo'";
    



$sql = "SELECT e.id,c.categoria,e.nombre,e.serial,e.cantidad,e.asset FROM equipos e INNER JOIN categoria_equipo c ON e.id_categoria=c.id
WHERE e.cantidad>0 $add ";


$resultado = mysqli_query($connect, $sql);

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




 <form action="" method="get">
    <input type="hidden" name="id_sap" value="<?php echo $id ?>">

    
          <div class="table-responsive">
            <table class="table table-striped  ">
    <tr>
        <td align="right" style="width: 400px;"></td>

        <td >
            <select class="form-control" type="text" name="categoria_equipo" require>


                <option value="">All</option>
                <?php
                    
                    $sql="SELECT id,categoria FROM categoria_equipo ORDER BY categoria";

                    $result = mysqli_query($connect, $sql);

                    while ($data=mysqli_fetch_array($result)){ 
                ?>

                        <option value="<?php echo $data["id"]?>" <?php if($data["id"]==$categoria_equipo) echo "selected" ?>><?php echo $data["categoria"]?></option>
                <?php
                    }
                ?>  
                               
                
                
            </select>
            <td>
            <input type="submit" class="btn btn-sm btn-outline-secondary mt-1"  name="buscar" id="buscar" value="Search">
            </td>
    </tr>
    
</table>
</form>
<br>

<h2 class="mt-1">Select Device</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
 
<thead>

    <tr>
    <th>No</th>
    <th>Team</th>
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
        <td><button class="btn btn-sm btn-outline-secondary" onclick="anadir_equipo(<?php echo $datos['id'] ?>, '<?php echo $id ?>', <?php echo $datos['asset'] ?> )">Select</button></td>
       
    </tr>
<?php
}
?>
</tbody>

</table>


       <button class="btn btn-sm btn-outline-secondary" type="button" onclick="javascript:window.location.href='/views/listado_equipos.php?id_sap=<?php echo $id ?>'" >Next</button>


<script>

    function anadir_equipo(id_equipo, id_sap, asset){

        if(asset > 0){
            console.log("Entro al if")
            window.location.href='/controllers/agregar_equipos.php?id_equipo='+id_equipo+'&id_sap='+id_sap;
        }
        else {
           
            window.open(`ventana_cantidad.php?id_equipo=${id_equipo}&id_sap=${id_sap}`, 'Cantidad equipos', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=350,height=250,left=420,top=130');
        }

    }
    // 
</script>
</main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/actions-buttons.js"></script>
  
</body>
</html>