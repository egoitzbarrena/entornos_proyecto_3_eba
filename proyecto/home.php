<?php
session_start();
if (!isset($_SESSION['usuario']))
    header("location:index.html");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Videojuego con Javascript y HTML5</title>
    <link type="text/css" rel="stylesheet" href="css/main.css?14042012">
    <script src="js/videojuego-javascript.js?04042012" type="text/javascript"></script>
</head>
<body onload="game.init()">
        <div class="derecha">
            <h3 class="tituloPuntuaciones">MEJORES PUNTUACIONES</h3>
            <ul id="puntuaciones"></ul>
        </div>
        <div class="juego">
            <canvas id="canvas" width="600" height="650">TU NAVEGADOR NO SOPORTA HTML5!</canvas>
        </div>

    </div>

</body>
</html>