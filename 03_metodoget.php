<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digita la siguiente informacion</h1>
    <form action="03_metodoget.php" method="post">
        Nombre:
        <input type="text" name="nombre"/>
        <br>
        Fecha:
        <input type="date" name="fecha" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <h2>La informacion enviada es: </h2>
    <?php
    print_r($_POST);
    ?>
</body>
</html>