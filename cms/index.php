<!DOCTYPE html>  
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<link rel="stylesheet" type="text/css" href="../estilos/estilo.css" />
  
</head>
<body>
<div id="registro">
    <?php if ($mensaje) { ?>
        <div class="error">
            <?php echo $mensaje ?>
        </div>
    <?php } ?>
    <form method="post" action="registro.php">
        <label>Nombre: </label><input type="text" name="nombre" value="<?php echo $nombre ?>"><br>
        <label>Nombre de usuario: </label><input type="text" name="usuario" value="<?php echo $usuario ?>"><br>
        <label>Contraseña </label><input type="password" name="contrasena"><br>
        <label>Email: </label><input type="text" name="email" value="<?php echo $email ?>"><br>
        <div class="submit">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
  
</body>
</html>