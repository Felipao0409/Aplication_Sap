<?php

require("../config/connect.php");

$id=$_GET['id_equipo'];




    
$sql = "DELETE FROM equipos WHERE id='$id'";
    $resultado = $connect->query($sql);


if ($resultados=false) {

    echo "El equipo no fue Eliminado";
    
} else {

    echo "su equipo ha sido Eliminado";

     
}



?>


<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/views/listado_equipos_registrados.php' }, 2000);
</script>