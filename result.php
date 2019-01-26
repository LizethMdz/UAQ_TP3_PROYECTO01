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
        <a href="index.php" class="navbar-brand d-flex align-items-center">
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
      <div class="col-sm-12 img-inicio">
        <a href="index.html"><img src="IMG/results.png" height="150px" alt="LAMTSOFT"></a>
      </div>

      <?php

        $suma = 0;
        $porcentaje = 0;

        $uno = (int)$_POST['radio-1'];
        $dos = (int)$_POST['radio-2'];
        $tres = (int)$_POST['radio-3'];
        $cuatro = (int)$_POST['radio-4'];
        $cinco = (int)$_POST['radio-5'];

        $suma = $uno + $dos + $tres + $cuatro + $cinco;
        ?>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p class="text-center">Total de Puntos: <?php echo $suma ?></p>
            <p class="text-center"> Puntaje: 25 Puntos = 100%</p>
            <?php $suma;
              $porcentaje = ($suma * 100)/25;
            ?>

            <p class="text-center"> Tu Puntaje: <?php echo $porcentaje ?> % </p>
            <?php
              if($porcentaje > 21 && $porcentaje <= 40 ){
                echo "<p class='text-center'> Tu nivel está entre 20 y 40 entonces necesitas
                mejorar tus habitos personales, para que de alguna manera puedas sentirte
                mejor contigo mismo. </p>";
              }

              if ($porcentaje > 41 && $porcentaje <= 60) {
                echo "<p class='text-center'> Tu nivel está entre 40 y 60 entonces tienes
                un porcentaje bueno, pero, puedes mejorar incrementando tus habitos. </p>";
              }

              if ($porcentaje > 61 && $porcentaje <= 80) {
                echo "<p class='text-center'> Tu nivel está entre 60 y 80 entonces posees un
                control adecuado en tu vida, por lo que, te gusta estar preparado para todo. </p>";
              }

              if ($porcentaje > 81 && $porcentaje <= 100) {
                echo "<p class='text-center'> Tu nivel está entre 80 y 100 entonces tienes
                un alto grado de proactividad, por lo que tu, tu eliges como
                actuar ante ciertas circunstancias. </p>";
              }

            ?>
          </div>
        </div>
      </div>

      <hr>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="container" style="min-width: 400px; max-width: 400px; height: 400px; margin: 0 auto; text-align:center;"></div>
          </div>

        </div>
      </div>
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script type="text/javascript"
>
Highcharts.chart('container', {

  chart: {
    type: 'gauge',
    plotBackgroundColor: null,
    plotBackgroundImage: null,
    plotBorderWidth: 0,
    plotShadow: false
  },

  title: {
    text: 'Proactividad'
  },

  pane: {
    startAngle: -150,
    endAngle: 150,
    background: [{
      backgroundColor: {
        linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
        stops: [
          [0, '#FFF'],
          [1, '#333']
        ]
      },
      borderWidth: 0,
      outerRadius: '109%'
    }, {
      backgroundColor: {
        linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
        stops: [
          [0, '#333'],
          [1, '#FFF']
        ]
      },
      borderWidth: 1,
      outerRadius: '107%'
    }, {
      // default background
    }, {
      backgroundColor: '#DDD',
      borderWidth: 0,
      outerRadius: '105%',
      innerRadius: '103%'
    }]
  },

  // the value axis
  yAxis: {
    min: 0,
    max: 200,

    minorTickInterval: 'auto',
    minorTickWidth: 1,
    minorTickLength: 10,
    minorTickPosition: 'inside',
    minorTickColor: '#666',

    tickPixelInterval: 30,
    tickWidth: 2,
    tickPosition: 'inside',
    tickLength: 10,
    tickColor: '#666',
    labels: {
      step: 2,
      rotation: 'auto'
    },
    title: {
      text: '%'
    },
    plotBands: [{
      from: 0,
      to: 120,
      color: '#55BF3B' // green
    }, {
      from: 120,
      to: 160,
      color: '#DDDF0D' // yellow
    }, {
      from: 160,
      to: 200,
      color: '#DF5353' // red
    }]
  },

  series: [{
    name: 'Proactividad',
    data: [ <?php echo $porcentaje ?> ],
    tooltip: {
      valueSuffix: ' %'
    }
  }]

},
// Add some life
function (chart) {
  if (!chart.renderer.forExport) {
    setInterval(function () {
      var point = chart.series[0].points[0],
        newVal,
        inc = Math.round((Math.random() - 0.5) * 20);

      newVal = point.y + inc;
      if (newVal < 0 || newVal > 200) {
        newVal = point.y - inc;
      }

    }, 3000);
  }
});

</script>


</body>
</html>
