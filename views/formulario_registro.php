<?php

    require ("../config/connect.php");

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


    <!-- Main content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    


<h1 class="mt-3 h2">Article Registration</h1>

    <form method="GET" action="../controllers/ingresar_equipos.php">
    <table class="mb-3">
        
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

        <option value="<?php echo $data["id"]?>"><?php echo $data["categoria"]?></option>
<?php
    }
?>  
               


</select>
</td>
    </tr>

    <tr>
        <td>Nombre Equipo</td>
        <td><label for="nombre"></label>
    <input type="text" name="nombre" id="nombre"></td>
    </tr>
    <tr>
        <td>serial</td>
        <td><label for="serial"></label>
    <input type="text" name="serial" id="serial"></td>
    </tr>
    <tr>
        <td>Cantidad</td>
        <td><label for="cantidad"></label>
    <input type="number" name="cantidad" id="cantidad"></td>
    </tr>
    <tr>
        <td>Asset</td>
        <td><label for="asset"></label>
    <input type="number" name="asset" id="asset"></td>
    </tr>
    <tr>
        <td>Fecha Ingreso</td>
        <td><label for="fecha_ingreso"></label>
    <input type="date" name="fecha_ingreso" id="fecha_ingreso"></td>
    </tr>
    

    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td> 
    </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" name="registro" id="registro" value="registrar"> &nbsp;&nbsp;
                <button type="reset" name="Borrar" id="Borrar" >Borrar</button> &nbsp;&nbsp;
                <button type="button" onclick="javascript:window.location.href='/views/listado_equipos_registrados.php'" id="">Volver</button>
            </td>
        </tr>

    </table>  
    </form>

    </main>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/actions-buttons.js"></script>
  
</body>
</html>