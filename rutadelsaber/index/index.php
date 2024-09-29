<!--
#############################################################################################################################
Página para la ruta del saber creada por Esteban Pautt y con ideas de miembros de la ruta
Mi intención con la página es crear algo útil y remodelar la página de la ruta que está en la página de inicio de UNITECNAR
#############################################################################################################################
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruta del Saber</title>
    <link rel="icon" href="/Sources/favicontecnar.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css/styles/index.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<!-- Reutilización de código con php del header y el sidebar, en lo último está el footer reutilizado. -->
<?php include 'C:/xampp/htdocs/rutadelsaber/header.php'; ?>
<?php include 'C:/xampp/htdocs/rutadelsaber/sidebar.php'; ?>

<!-- Carrusel de imagénes de la ruta -->

<main class="carousel-main">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center" id="cont">
                <h2 id="carousel-title">Bienvenido a la Ruta del Saber</h2>
                <div class="carousel-text">   
                  <p>La Ruta del Saber ofrece a los estudiantes la oportunidad de desarrollar habilidades y conocimientos específicos en su área de interés, al mismo tiempo que se enfocan en mejorar el desempeño institucional en SABER TYT y SABER PRO. Desarrolando su aprendizaje en un contexto práctico y crecimiento de habilidades críticas para su carrera profesional. En la Ruta del Saber promovemos 5 competencias genéricas.</p>
                    <button class="btn btn-primary" id="btn">Siguiente</button>
                </div>
            </div>
            <div class="col-md-6" id="car-div">
                <div class="carousel">
                  <div class="carousel-images">
                    <img src="/Sources/Carussel/1.jpeg" alt="Imagen 1">
                        <img src="/Sources/Carussel/2.jpeg" alt="Imagen 2">
                        <img src="/Sources/Carussel/3.jpeg" alt="Imagen 3">
                        <img src="/Sources/Carussel/4.jpeg" alt="Imagen 4">
                        <img src="/Sources/Carussel/5.jpeg" alt="Imagen 5">
                    </div>
                    <button id="prevBtn">&#10094;</button>
                    <button id="nextBtn">&#10095;</button>
                  </div>
            </div>
        </div>
      </div>

<!-- Contenido de nosotros card -->

      <div id="nosotros" class="container">
        <div class="us-blur">
          <div class="contenido" id="img-blur">
            <h1 id="mid">Sobre nosotros</h1>
            <p class="info">Somos la ruta del saber</p>
          </div>
          <div class="img-container">
            <img src="/Sources/member.jpeg" alt="" class="expandable" id="member-img">
          </div>
        </div>
      </div>
      
      <div id="nosotros" class="container">
        <div class="test-blur">
          <div class="contenido" id="test-blur">
            <h1 id="mid">Sobre nosotros</h1>
            <p class="info">Somos la ruta del saber</p>
          </div>
          <div class="test-container">
            <img src="/Sources/test.jpg" alt="" class="expandable" id="test-img">
          </div>
        </div>
      </div>
    </main>
  </body>
  
<!-- Reutilización de el footer -->

  <?php include 'C:/xampp/htdocs/rutadelsaber/footer.php'; ?>
  
<!-- Links a Javascript codes -->

  <script src="/scripts/index/script.js"></script>
  <script src="https://kit.fontawesome.com/14fc7e6155.js" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous"></script>
 <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
</html>
