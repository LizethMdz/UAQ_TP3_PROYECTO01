<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/estilos.css">
  <link rel="shortcut icon" type="image/png" href="IMG/habilidad.png">
  <title>PROYECTO 1</title>
</head>
<body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Acerca de</h4>
            <p class="text-muted">
              El sitio tiene como proposito presentar una encuesta
              a varios usuarios, con el proposito de identirficar el
              indice de proactividad.
            </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contacto</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow us on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-nav shadow-sm">
      <div class="container d-flex justify-content-between">
        <!-- <a href="index.php"><img src="IMG/lamtsoft.png" height="150px" alt="LAMTSOFT"></a> -->
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>SISTEMAS INFORMATICOS</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>


  <br><br>
  <main role="main">


      <section class=" text-center bg-white">
        <div class="container">
          <h1 class="jumbotron-heading">TÓPICO III - </h1>
          <p class="lead text-muted">7 HABITOS DE LA GENTE ALTAMAENTE EFECTIVA
          </p>
      </section>

      <hr>

      <form method="post" action="result.php">

      <div class="container col-sm-10 cont">
        <h3 class="text-center">Contesta las siguientes preguntas para evaluar tu nivel de proactividad</h3>
        <br><br>

          <div class="row-md-5 preguntas">

              <div class="col-11 pregu">
                <p>PREGUNTA 1</p>
                <p class="col-12">¿Estás dispuesto a aceptar retos y desafíos o te asusta el cambio, la incertidumbre y las nuevas experiencias?</p>
                 <div class="custom-control custom-radio mb-3">
                  <input type="radio" class="custom-control-input" id="preg-1" name="radio-1" required value="1">
                  <label class="custom-control-label" for="preg-1">Nada</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" class="custom-control-input" id="preg-2" name="radio-1" required value="2">
                  <label class="custom-control-label" for="preg-2">Poco</label>

                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" class="custom-control-input" id="preg-3" name="radio-1" required value="3">
                  <label class="custom-control-label" for="preg-3">Más o menos</label>

                </div>

                <div class="custom-control custom-radio mb-3">
                  <input type="radio" class="custom-control-input" id="preg-4" name="radio-1" required value="4">
                  <label class="custom-control-label" for="preg-4">Mucho</label>

                </div>

                <div class="custom-control custom-radio mb-3">
                  <input type="radio" class="custom-control-input" id="preg-5" name="radio-1" required value="5">
                  <label class="custom-control-label" for="preg-5">Todo</label>

                </div>
              </div>
          </div>

          <div class="row-md-5 preguntas">

              <div class="col-11 pregu">
                <p>PREGUNTA 2</p>
                <p class="col-12 p-1">
                ¿Disfrutas tomando decisiones y emprendiendo la acción o
                prefieres que sea alguien más quien tenga esa responsabilidad?
                </p>
               <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-6" name="radio-2" required value="1">
                <label class="custom-control-label" for="preg-6">Nada</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-7" name="radio-2" required value="2">
                <label class="custom-control-label" for="preg-7">Poco</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-8" name="radio-2" required value="3">
                <label class="custom-control-label" for="preg-8">Más o menos</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-9" name="radio-2" required value="4">
                <label class="custom-control-label" for="preg-9">Mucho</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-10" name="radio-2" required value="5">
                <label class="custom-control-label" for="preg-10">Todo</label>

              </div>
            </div>
          </div>

          <div class="row-md-5 preguntas">

              <div class="col-11 pregu">
                <p>PREGUNTA 3</p>
                <p class="col-12">¿Tienes una actitud positiva frente al cambio o cada vez que aparece una nueva situación o persona te disgustas y te lleva un tiempo adaptarte?</p>
                  <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="preg-11" name="radio-3" required value="1">
                    <label class="custom-control-label" for="preg-11">Nada</label>

                  </div>

                  <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="preg-12" name="radio-3" required value="2">
                    <label class="custom-control-label" for="preg-12">Poco</label>

                  </div>

                  <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="preg-13" name="radio-3" required value="3">
                    <label class="custom-control-label" for="preg-13">Más o menos</label>

                  </div>

                  <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="preg-14" name="radio-3" required value="4">
                    <label class="custom-control-label" for="preg-14">Mucho</label>

                  </div>
                  <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="preg-15" name="radio-3" required value="5">
                    <label class="custom-control-label" for="preg-15">Todo</label>

                  </div>
            </div>
          </div>

          <div class="row-md-5 preguntas">

              <div class="col-11 pregu">
                <p>PREGUNTA 4</p>
                <p class="col-12">¿Superas los obstáculos que se interponen en la consecución de tus objetivos o cuando vislumbras una piedra en tu camino te detienes a meditar y sueles dar marcha atrás?</p>
               <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-16" name="radio-4" required value="1">
                <label class="custom-control-label" for="preg-16">Nada</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-17" name="radio-4" required value="2">
                <label class="custom-control-label" for="preg-17">Poco</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-18" name="radio-4" required value="3">
                <label class="custom-control-label" for="preg-18">Más o menos</label>

              </div>

              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-19" name="radio-4" required value="4">
                <label class="custom-control-label" for="preg-19">Mucho</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-20" name="radio-4" required value="5">
                <label class="custom-control-label" for="preg-20">Todo</label>

              </div>
            </div>
          </div>

          <div class="row-md-5 preguntas">

              <div class="col-11 pregu">
                <p>PREGUNTA 5</p>
                <p class="col-12">¿Te gusta asumir riesgos o prefieres un “pájaro en mano que cien volando”?</p>
               <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-21" name="radio-5" required value="1">
                <label class="custom-control-label" for="preg-21">Nada</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-22" name="radio-5" required value="2">
                <label class="custom-control-label" for="preg-22">Poco</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-23" name="radio-5" required value="3">
                <label class="custom-control-label" for="preg-23">Más o menos</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-24" name="radio-5" required value="4">
                <label class="custom-control-label" for="preg-24">Mucho</label>

              </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" id="preg-25" name="radio-5" required value="5">
                <label class="custom-control-label" for="preg-25">Todo</label>

              </div>
            </div>
          </div>




        </div>
        <div class="container col-sm-10 text-center btn-next">
          <button type="submit" class="btn btn-primary btn-lg">EVALUAR</button>
        </div>
      </form>



      <hr>

      <div class="container col-sm-10 text-center btn-next">
        <a class="btn btn-info btn-lg text-white" href="menu.php">Atras</a>
      </div>



    </main>
    <br><br>
    <hr>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Regresar arriba</a>
    </p>
    <p>Copyright Reserved</p>
    <p>New on this page <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
  </div>
</footer>


<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
