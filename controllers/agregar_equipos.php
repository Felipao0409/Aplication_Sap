<?php

require("../config/connect.php");

$id_equipo=$_GET["id_equipo"];
$id_sap=$_GET["id_sap"];




    
$consulta="INSERT INTO equipos_seleccionados (Id_equipo, id_sap, cantidad) VALUES ($id_equipo, '$id_sap', 1)";

$resultados=mysqli_query($connect, $consulta);

if ($resultados=false) {

    echo "El equipo no fue ingresado";
    
} else {

    echo "el equipo ha sido registrado y guardado";

    
    
    
}


?>


<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/views/seleccionar_equipo.php?id_sap=<?php echo $id_sap ?>'}, 2000);
</script>


