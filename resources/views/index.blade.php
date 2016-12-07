@include('layouts.app')
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/home-styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import 'https://fonts.googleapis.com/css?family=Open+Sans:300i,400,700i';
    </style>
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <title>Home</title>
</head>


<body>
    <div class="contenedor">

        <div class="clear"> </div>
        <div class="contenedor_a">
            <div class="primer_contendor">
                <div class="planes">
                    <h1>¿De qué tenes ganas hoy?</h1>
                    <a href="#">- ANTOJO DEL DÍA -</a>
                </div>
                <div class="plan_a">
                    <h3>Brunch?</h3>
                    <a href="#">120 RESTAURANTES</a>
                    <img src="images/hot-drink.png" alt="" />
                </div>
                <div class="plan_b">
                    <h3>Bar?</h3>
                    <a href="#">120 RESTAURANTES</a>
                    <img src="images/cocktail.png" alt="" />
                </div>
                <div class="plan_c">
                    <h3>Cena?</h3>
                    <a href="#">120 RESTAURANTES</a>
                    <img src="images/hamburger.png" alt="" />
                </div>
            </div>
            <div class="clear">

            </div>
            <div class="segundo_contendor">
                <div class="followers">
                    <h1>Influencers del mes</h1>
                    <a href="#">- DESCUBRE MAS -</a>
                </div>
                <div class="follow1">
                    <img src="images/foto_follower.png" alt="" />
                    <p>
                        Nombre <br> 560 Seguidores
                    </p>
                </div>
                <div class="follow2">
                    <img src="images/foto_follower.png" alt="" />
                    <p>
                        Nombre <br> 560 Seguidores
                    </p>
                </div>
                <div class="follow3">
                    <img src="images/foto_follower.png" alt="" />
                    <p>
                        Nombre <br> 560 Seguidores
                    </p>
                </div>
            </div>
        </div>
      <div class="contenedor_b">
          <h3>Emprendimiento</h3>
          <img src="images/Screen Shot 2016-08-31 at 20.54.30.png" alt="" />
          <p>
            lorem Ipsum Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi etiam futurum.
          </p>
          <a href="#">Seguir Leyendo</a>
      </div>
      <div class="contenedor_c">
          <img src="images/7a3d6d5805dc0ede6db5b16ab467c489.jpg" alt="" />
          <div class="transparente">
            <div class="marco_rosa">
              <h2>Lugares del Mes</h2>
              <a href="#">- EXPLORA -</a>
                <img src="images/estrellitas-01.png" alt="" />
            </div>
          </div>

        <div class="cuadrados">
          <div class="contenedor_lugar1">

          </div>
          <div class="contenedor_lugar2">

          </div>
          <div class="contenedor_lugar3">

          </div>
          <div class="contenedor_lugar4">

          </div>

        </div>
      </div>
      <div class="clear">

      </div>
      @include('layouts.footer')

    </div>
</body>

</html>
