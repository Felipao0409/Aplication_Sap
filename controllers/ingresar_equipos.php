<?php

require("../config/connect.php");

$equ=$_GET["categoria_equipo"];
$nom=$_GET["nombre"];
$ser=$_GET["serial"];
$can=$_GET["cantidad"];
$ass=$_GET["asset"];
$fec=$_GET["fecha_ingreso"];



    
$consulta="INSERT INTO equipos (ID_CATEGORIA,NOMBRE,SERIAL,CANTIDAD,ASSET,FECHA_INGRESO) VALUES ('$equ','$nom','$ser','$can','$ass','$fec')";

$resultados=mysqli_query($connect, $consulta);

if ($resultados=false) {

    echo "El equipo no fue ingresado";
    
} else {

    echo "el equipo ha sido registrado y guardado";

    // echo "<table><tr></tr><td>$equ</td></table>";
    // echo "<table><tr></tr><td>$nom</td></table>";
    // echo "<table><tr></tr><td>$ser</td></table>";
    // echo "<table><tr></tr><td>$can</td></table>";
    // echo "<table><tr></tr><td>$ass</td></table>";
    // echo "<table><tr></tr><td>$fec</td></table>";
    
    
    
    
}



?>

<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/views/ingresar_equipos.php?id_sap=<?php echo $id_sap ?>&ticket=<?php echo $ticket ?>'}, 2000);
</script>


<!-- //poner un mensaje que cuando el equipo sea igual me de un mensaje el equipo ya fue registrado esto se verificaria con el serial, solo serviria para los que tengan seriales// -->
 