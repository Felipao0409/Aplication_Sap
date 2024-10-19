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

    <img src="./assets/img/sap.jpeg" >
    <h1>Bienvenido Area IT</h1>

    <form method="POST" action="./controllers/login.php">
    
        <label>ID SAP</label>
        <input type="text" name="id_sap" required >
        <button type="submit">INGRESAR</button>

        </form>
        </div>
</body>
<div class="boton"></div>
<button onclick="javascritp:window.location.href='/views/informe.php'">INFORME DE EQUIPOS</button>

<button onclick="javascritp:window.location.href='/views/listado_equipos_registrados.php'">INGRESAR NUEVO EQUIPO</button>



</html>




<!-- DELIMITER

CREATE TRIGGER actualizar_stock_equipos
AFTER INSERT ON equipos_seleccionados
FOR EACH ROW
BEGIN    
        UPDATE equipos
        SET cantidad = cantidad - NEW.cantidad
        WHERE id = NEW.id_equipo;   
END;

//

DELIMITER ; -->

<!-- DELIMITER //

CREATE TRIGGER actualizar_stock_equipos_devueltos
AFTER DELETE ON equipos_seleccionados
FOR EACH ROW
BEGIN    
        UPDATE equipos
        SET cantidad = cantidad + OLD.cantidad
        WHERE id = OLD.id_equipo;   
END;

//

DELIMITER ; -->