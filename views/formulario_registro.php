<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
<h1> Registro de Articulos</h1>

    <form method="POST" action="../controllers/registro_equipos.php">
    <table border="0" align="center">
        
    <tr>
        <td>Equipo</td>
        <td><label for="equipo"></label>
    <select type="text" name="equipo" id="equipo" require>
        <option value="">seleccione</option>

        
        <? // Aqui va la consula a la tabla Categoriaquipo
             // $sql ...

            //while($datos = mysqli_fetch_assoc()) {

        ?>
        <option value="<? //echo $datos['id']; ?>"><? // echo $datos['categoria']; ?></option>
        <?php
          // }
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
                <button type="button" onclick="javascript:window.location.href='/index.php'" id="">Volver</button>
            </td>
        </tr>

    </table>  
    </form>
</body>
</html>