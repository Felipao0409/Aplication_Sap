<?php

require ('../config/connect.php');

$id=$_GET['id_sap'];


$sql="SELECT * FROM usuario WHERE id_sap='$id'";
$resultado = $connect->query($sql);

if ($resultado->num_rows > 0) {
    // Salida de datos de la fila
    $row = $resultado->fetch_assoc();
} else {
    echo "0 resultados";
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action=""></form>

    <h1>Bienvenido</h1>
   
    <label form="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>"><br>
    <label>Id SAP</label>
    <input type="text" name="id_sap" id="id_sap" value="<?php echo $row['id_sap']; ?>"><br>
    <label>Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="<?php echo $row['ciudad']; ?>"><br>
    <label>Correo</label>
    <input type="email" name="correo" id="correo" value="<?php echo $row['correo']; ?>"><br>
    
<h2>EQUIPOS ASIGNADOS</h2>

    <table border="1">

    <tr>
            <td>No</td>
            <td>Categoria</td>
            <td>Nombre Equipo</td>
            <td>Serial</td>
            <td>Cantidad</td>
            <td>Asset</td>
            <td>Fecha Entrega</td>
            <td>Accion</td>
    

    </tr>

    <?php

$sql="SELECT t.id, c.categoria, e.nombre, e.serial, t.cantidad, e.asset, t.fecha FROM tickets t INNER JOIN equipos e ON t.id_equipo=e.id
INNER JOIN categoria_equipo c ON e.id_categoria=c.id WHERE t.id_sap='$id' AND t.estado=0 ";

$result = mysqli_query($connect, $sql);

$contador=0;

while ($data=mysqli_fetch_array($result)){ 
    $contador++;

    ?>

        <tr>
            <td><?php echo $contador?></td>
            <td><?php echo $data['categoria']?></td>
            <td><?php echo $data['nombre']?></td>
            <td><?php echo $data['serial']?></td>
            <td><?php echo $data['cantidad']?></td>
            <td><?php echo $data['asset']?></td>
            <td><?php echo $data['fecha']?></td>
            <td><button onclick="finalizar(<?php echo $data['id'] ?>, '<?php echo $id?>' )">Finalizar</button></td>
</tr>
<?php
}
?>


    </table>


    <h2>HISTORIAL DE EQUIPOS</h2>

<table border="1">

<tr>
        <td>No</td>
        <td>Categoria</td>
        <td>Nombre Equipo</td>
        <td>Serial</td>
        <td>Cantidad</td>
        <td>Asset</td>
        <td>Fecha Prestamo</td>
        <td>Fecha Devolucion</td>
        


</tr>

<?php

$sql="SELECT t.id, c.categoria, e.nombre, e.serial, t.cantidad, e.asset, t.fecha, t.fecha_devolucion FROM tickets t INNER JOIN equipos e ON t.id_equipo=e.id
INNER JOIN categoria_equipo c ON e.id_categoria=c.id WHERE t.id_sap='$id' AND t.estado=1 ";

$result = mysqli_query($connect, $sql);

$contador=0;

while ($data=mysqli_fetch_array($result)){ 
$contador++;

?>

    <tr>
        <td><?php echo $contador?></td>
        <td><?php echo $data['categoria']?></td>
        <td><?php echo $data['nombre']?></td>
        <td><?php echo $data['serial']?></td>
        <td><?php echo $data['cantidad']?></td>
        <td><?php echo $data['asset']?></td>
        <td><?php echo $data['fecha']?></td>
        <td><?php echo $data['fecha_devolucion']?></td>
</tr>
<?php
}
?>


</table>



    <button type="button" onclick="javascript:window.location.href='/views/seleccionar_equipo.php?id_sap=<?php echo $id ?>'" id="">ASIGNAR NUEVO EQUIPO</button>
    <script>
        function finalizar(id,id_sap){
            const confirma=confirm("Desea confirmar la devolucion del equipo? ")
                if(confirma===true){
                    window.location.href="/controllers/devolucion_equipo.php?id_ticket="+id+"&id_sap="+id_sap
                    return true;
                }else{
                    return false;
                }    
        }
    </script>
</body>
</html>