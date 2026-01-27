<?php
    require_once 'EventosDao.php';
    require_once 'Organizador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $organizadores = organizadores_dao::obtenerOrganizadores();
    echo"<form action='eventos_guardar.php' method='post'>
        <input type='text' name='nombre'>
        <input type='date' name='fecha'>
        <input type='text' name='ubicacion'>
        <input type='number' name='asistentes'>
        <select name='organizador'>";
        foreach($organizadores as $organizador){
            echo "<option value=".$organizador->getId().">". $organizador->getNombre() ."</option>";
        }
    echo"</select></form>";
    ?>
</body>
</html>