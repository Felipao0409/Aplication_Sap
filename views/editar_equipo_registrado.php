<?php

    require ("../config/connect.php");
    $id_equipo=$_GET['id_equipo'];


    // Select que llena los campos segun el id del equipo
    $sql="SELECT e.id, e.id_categoria, e.nombre, e.serial,e.cantidad,e.asset,e.fecha_ingreso FROM equipos e 
WHERE id='$id_equipo' ";

$resultado = mysqli_query($connect, $sql);
$datos=mysqli_fetch_array($resultado);


$categoria_equipo=$datos['id_categoria'];


?>


<!DOCTYPE html>
<html lang="en">
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

<nav class="navbar barborder-bottom" style="background-color: #3c70f2;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/assets/img/logo.jpeg" width="100" height="50" class="d-inline-block align-text-top">
      
    </a>
    <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-secondary">
                  Export
                </button>
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



<h1 h2 mt-3> Actualizar Articulos</h1>

    <form method="POST" action="../controllers/actualizar_equipos.php">
    <table border="0" align="center">
        
    <tr>
        <td>Categoria Equipo</td>
        <td><label for="equipo"></label>
        <select type="text" name="categoria_equipo" require>


<option value="">Seleccione</option>
<?php
    
    $sql="SELECT id,categoria FROM categoria_equipo ORDER BY categoria";

    $result = mysqli_query($connect, $sql);

    while ($data=mysqli_fetch_array($result)){ 
?>

        <option value="<?php echo $data["id"]?>" <?php if($categoria_equipo==$data['id']) echo "selected" ?>><?php echo $data["categoria"]?></option>
<?php
    }
?>  
               


</select>
</td>
    </tr>

    <tr>
        <td>Nombre Equipo</td>
        <td><label for="nombre"></label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre'] ?>"></td>
    </tr>
    <tr>
        <td>serial</td>
        <td><label for="serial"></label>
    <input type="text" name="serial" id="serial" value="<?php echo $datos['serial'] ?>"></td>
    </tr>
    <tr>
        <td>Cantidad</td>
        <td><label for="cantidad"></label>
    <input type="number" name="cantidad" id="cantidad" value="<?php echo $datos['cantidad'] ?>"></td>
    </tr>
    <tr>
        <td>Asset</td>
        <td><label for="asset"></label>
    <input type="number" name="asset" id="asset" value="<?php echo $datos['asset'] ?>"></td>
    </tr>
    <tr>
        <td>Fecha Ingreso</td>
        <td><label for="fecha_ingreso"></label>
    <input type="date" name="fecha_ingreso" id="fecha_ingreso" value="<?php echo $datos['fecha_ingreso'] ?>"></td>
    </tr>
    

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td> 
    </tr>
        <tr>                                                        
            <td align="center" colspan="2">
                <input type="hidden" value="<?php echo $datos['id'] ?>" name="id_equipo"  >

                <input type="submit" name="registro" id="registro" value="actualizar"> &nbsp;&nbsp;
                <button type="button" onclick="javascript:window.location.href='listado_equipos_registrados.php'" id="">Volver</button>
            </td>
        </tr>

    </table>  
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/actions-buttons.js"></script>
</body>
</html>