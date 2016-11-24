<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header-styles.css">
    <title></title>
  </head>
  <body>
    <div class="contenedor">
          <header>
            <img src="images/logo-myplaces.png" class="logo">

							<form method="POST">
			<?php include("errores.php"); ?>
			<fieldset>INICIA SESIÓN <br><br>
			<div>
				<label for="email">Email</label>
				<input type="text" name="email" id="email"/>
			</div>
			<div>
				<label for="password">Contrase&ntilde;a</label>
				<input type="password" name="password" id="password"/>
			</div>
			<div>
				Recordame
				<input name="recordame" type="checkbox" value="true">
			</div>
			<div>
				<input type="submit" value="Enviar">
			</div>
</fieldset>
		</form>


              <nav class="barra2">
                  <img src="images/menu_icon.png" class="icon"/>
                  <ul>
                      <li><a href="registro.php">REGISTRACIÓN</a></li>
                      <li><a href="faq.php">FAQ</a></li>
                      <li><a href="#">ABOUT US</a></li>
                  </ul>
              </nav>

          <div class="clear">
          </div>
  </body>
</html>
