<?php

require ("../config/connect.php");

$id_sap=$_GET['id_sap'];
$id=$_GET['id_ticket'];
$fecha=date('Y-m-d');

$sql= "UPDATE tickets SET estado=1, fecha_devolucion='$fecha' WHERE id='$id' ";
$resultado = $connect->query($sql);


if ($resultados=false) {

    echo "El equipo no fue devuelto";
    
} else {

    echo "su equipo ha sido devuelto";

     
}

?>

<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/views/home.php?id_sap=<?php echo $id_sap ?>'}, 2000);
</script>