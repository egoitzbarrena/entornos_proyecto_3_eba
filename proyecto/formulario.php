<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>AÑADIR USUARIO</title>
   <link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>
<body>
<h1>INSERTA LOS</h1>
<h1> DATOS DEL USUARIO</h1>
   <form method="post" action="insertuser.php">
	<table border="0" align="left">
	<tr>
	<th>USUARIO</th>
	<td><input id="user" type="text" required="required" name="user" value=""/></td>
	</tr>
	<tr>
	<th>CONTRASEÑA</th>
	<td><input id="password" type="password"  required="required" name="password" value="" /></td>
	</tr>
	<tr>
	<td><input type="image" src="images/add-contact-icon.png" id="submit" alt="submit"></td>
	<td><a href="index.html"><img id="menu" src="images/home-icon.png"></a> </td>
	</tr>
	</table>
	</form>
</body>
</html>