<?php

require("../config/connect.php");

$id=$_POST['id_equipo'];
$equ=$_POST["categoria_equipo"];
$nom=$_POST["nombre"];
$ser=$_POST["serial"];
$can=$_POST["cantidad"];
$ass=$_POST["asset"];
$fec=$_POST["fecha_ingreso"];



    
$sql = "UPDATE equipos SET id_categoria='$equ',nombre='$nom',serial='$ser',cantidad='$can', fecha_ingreso='$fec' WHERE id='$id'";
    $resultado = $connect->query($sql);


if ($resultados=false) {

    echo "El equipo no fue ingresado";
    
} else {

    echo "su equipo ha sido Actualizado";

    

     
}



?>

<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/views/listado_equipos_registrados.php' }, 2000);
</script>

