<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/registro-styles.css">
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<!-- <script src="js/validacion.js"></script> -->
<title>Inicio de sesión</title>
</head>
<body>
    <div class="contenedor">


     </div>




  <form class="registro" method="POST" enctype= "multipart/form-data">



          <label for="name">Nombre</label>
          <br>
          <input name="name" id="name" type="text" value='<?=$nombreDefault?>' maxlength="50">
          <?php if (isset($errores["name"])) {
    echo $errores["name"];
}
?>  <br/>
                    <span id='register_name_errorloc' class='error'></span>
          <br>
          <label for="lastname">Apellido</label>
          <br>
          <input name="lastname" id="lastname" type="text" value='<?=$lastnameDefault?>'>
          <?php if (isset($errores["lastname"])) {
    echo $errores["lastname"];
  } ?>
          <br>
          <span id='register_lastname_errorloc' class='error'></span>
          <label for="email">Mail</label>
          <br>
          <input name="email" id="email" type="mail" value='<?=$emailDefault?>'maxlength="50">
          <?php if (isset($errores["email"])) {
    echo $errores["email"];
}
?>

                    <br/>
                    <span id='register_email_errorloc' class='error'></span>
          <br>
          <label for="username">Nombre de usuario</label>
          <br>
          <input name="username" id="username" type="text" value='<?=$userDefault?>'>
          <?php if (isset($errores["username"])) {
    echo $errores["username"];
}
?>
          <br>
          <span id='register_username_errorloc' class='error'></span>
          <label for="password">Contraseña</label>
          <br>
          <input name="password" id="password" type="password" value='<?=$passDefault?>'>
          <?php if (isset($errores["password"])) {
    echo $errores["password"];
}
?>
          <br>
          <span id='register_password_errorloc' class='error'></span>
          <label for="password2">Repetir contraseña</label>
          <br>
          <input name="password2" id="password2" type="password">
          <?php if (isset($errores["password2"])) {
    echo $errores["password2"];
}
?>
          <br>
          <span id='register_password2_errorloc' class='error'></span>
          Fecha de nacimiento<br><input type="date" name="birth" id="birth">
          <br>
          Avatar <br>
          <input type="file" name="avatar" value="" id="avatar">
          <?php if (isset($errores["avatar"])) {
    echo $errores["avatar"];
}
?>





  <button type="submit" class="registrarse">Registrarse</button>

  </form>

@include('layouts.footer')
</body>
</html>
