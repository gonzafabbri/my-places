<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/inicio_styles.css">
    <title>@yield('title', 'My Places')</title>
  </head>
  <body>
  {{-- <fieldset>INICIA SESIÓN <br><br>
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
		</form> --}}

@section('navbar')
  <nav class="barra2">
      <img src="images/menu_icon.png" class="icon"/>
      <ul>
          <li><a href="registro.php">REGISTRACIÓN</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="#">ABOUT US</a></li>
      </ul>
  </nav>
@endsection


          <div class="clear">
          </div>
          @section('footer')
            <footer class="pie">
    <a href="faq.php" class="a-pie">Ayuda</a>
    <a href="#" class="a-pie">Términos y condiciones</a>
    <a href="#" class="a-pie">Mapa del sitio</a>
    <small class="copyright">Copyright 2016 SA My places | Todos los derechos reservados.</small>
  </footer>
          @endsection


  </body>
