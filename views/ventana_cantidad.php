<?php


require("../config/connect.php");

$id_equipo=$_GET["id_equipo"];
$id_sap=$_GET["id_sap"];
$cantidad=$_GET["cantidad"];
$guardar=$_GET['guardar'];


if($guardar==1){
    
$consulta="INSERT INTO equipos_seleccionados (Id_equipo, id_sap, cantidad) VALUES ($id_equipo, '$id_sap', $cantidad)";

$resultados=mysqli_query($connect, $consulta);

if ($resultados=true) {

    echo "Cantidad insertada";
    echo '<script>window.close()
     window.opener.location.reload();
    </script>';

} else {

    echo "No se guardo la cantidad";
        
    
}


}


?>|

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantidad equipos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
    </style>
</head>
<body>
    
    <p>Ingrese la cantidad:</p>
    <form method="get">
    <input type="number" required name="cantidad">
    <input type="hidden" name="guardar" value="1">
    <input type="hidden" name="id_equipo" value="<?php echo $id_equipo ?>">
    <input type="hidden" name="id_sap" value="<?php echo $id_sap ?>">
    <button type="submit">Guardar</button>
    </form>
    
</body>
</html>