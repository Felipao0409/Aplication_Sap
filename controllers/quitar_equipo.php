<?php

require("../config/connect.php");

$id=$_GET['id_equipo'];
$id_sap=$_GET['id_sap'];




    
$sql = "DELETE FROM equipos_seleccionados WHERE id='$id'";
    $resultado = $connect->query($sql);


if ($resultados=false) {

    echo "El equipo no fue Eliminado";
    
} else {

    echo "su equipo ha sido Eliminado";

     
}




?>




<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/views/listado_equipos.php?id_sap=<?php echo $id_sap ?>' }, 2000);
</script>