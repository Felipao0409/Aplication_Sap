<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Ticket</title>
</head>
<body>
    <div class="contenedor">

    <img src="./assets/img/sap.jpeg" >
    <h1>Sus Equipos han sido Asignados Satisfactoriamente</h1>

    <form method="POST" action="">
    
        <label>Ticket Numero</label><br>
        <input type="text" value="<?php echo $_GET['ticket']?>">
        

        </form>
        </div>
</body>

<button onclick="javascritp:window.location.href='/index.php'">OK</button>
</html>