<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Regisrar</title>
</head>
<body>
    <div class="contenedor">
    <h1>Bienvenido Area IT</h1>

    <form method="POST" action="./controllers/login.php">
    
        <label>ID SAP</label>
        <input type="text" id="id_sap" name="id_sap" require>
        <button type="submit">INGRESAR</button>

        </form>
        </div>
</body>
<div class="boton"></div>
<button>INFORME DE EQUIPOS</button>

<button onclick="javascritp:window.location.href='/views/formulario_registro.php'">INGRESAR NUEVO EQUIPO</button>
</html>