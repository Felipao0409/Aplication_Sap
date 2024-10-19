<?php

require("../config/connect.php");

$id_sap=$_GET['id_sap'];
$fecha=date('Y-m-d');



$sql = "SELECT max(numero_ticket) AS numero_ticket FROM tickets";
$resultados1=mysqli_query($connect, $sql);

$numero_ticket=mysqli_fetch_array($resultados1);
    $ticket=$numero_ticket['numero_ticket']+1;

$sql2 = "SELECT id_equipo, id_sap, cantidad FROM equipos_seleccionados WHERE id_sap='$id_sap'";
$resultados=mysqli_query($connect, $sql2);

while($data = mysqli_fetch_array($resultados)) {

    $consulta=" INSERT INTO tickets (numero_ticket, Id_equipo, id_sap, cantidad, fecha, estado) VALUES ($ticket, {$data['id_equipo']}, '{$data['id_sap']}', {$data['cantidad']}, '$fecha', 0)";


$resultado=mysqli_query($connect, $consulta);




}

echo "😪Generando Ticket...";

?>

<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/views/numero_tickets.php?id_sap=<?php echo $id_sap ?>&ticket=<?php echo $ticket ?>'}, 1000);
</script>