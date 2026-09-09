<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    

    

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
    <h1>Solucion Parcial</h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="edad">Edad:</label>
        <input type="number" name="edad">
        <label for="correo">Correo:</label>
        <input type="email" name="correo">
        <label for="">SELECCIONE UN JUEGO</label>

        <select name="juego" id="">
            <option value="1">FIFA</option>
            <option value="2">MINECRAFT</option>
            <option value="3">FORTNITE</option>
            <option value="4">CALL OF DUTY</option>
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>