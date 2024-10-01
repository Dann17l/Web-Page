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
    <link rel="icon" href="../rutadelsaber/assets/img/favicontecnar.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../rutadelsaber/assets/css/styles/index.css">

</head>
<body>
<!-- Reutilización de código con php del header y el sidebar, en lo último está el footer reutilizado. -->
<?php include '../rutadelsaber/include/header.php'; ?>
<?php include '../rutadelsaber/include/sidebar.php'; ?>

<!-- Carrusel de imagénes de la ruta -->

<main class="carousel-main">
        <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center" id="cont">
                <h2 id="carousel-title">Bienvenido a la Ruta del Saber</h2>
                <div class="carousel-text">   
                    <p>La Ruta del Saber ofrece a los estudiantes la oportunidad de desarrollar habilidades y conocimientos específicos en su área de interés...</p>
                    <button class="btn btn-primary" id="btn">Siguiente</button>
                </div>
            </div>
            <div class="col-md-6" id="car-div">
                <div class="carousel">
                    <div class="carousel-images" id="owl-carousel">
                      <img src="../rutadelsaber/assets/img/Carussel/27.jpeg" alt="Imagen 5">
                        <img src="../rutadelsaber/assets/img/Carussel/11.jpg" alt="Imagen 1">
                        <img src="../rutadelsaber/assets/img/Carussel/21.jpeg" alt="Imagen 2">
                        <img src="../rutadelsaber/assets/img/Carussel/12.jpeg" alt="Imagen 3">
                        <img src="../rutadelsaber/assets/img/Carussel/28.jpeg" alt="Imagen 4">
                    </div>
                    <button id="prevBtn">&#10094;</button>
                    <button id="nextBtn">&#10095;</button>
                </div>
            </div>
        </div>
    </main>

<!-- Contenido de nosotros card -->

      <div id="nosotros" class="container">
        <div class="us-blur">
          <div class="contenido" id="img-blur">
            <h1 id="mid">Sobre nosotros</h1>
            <p class="info">Somos la ruta del saber</p>
          </div>
          <div class="img-container">
            <img src="../rutadelsaber/assets/img/member.jpeg" alt="" class="expandable" id="member-img">
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
            <img src="../rutadelsaber/assets/img/Carussel/29.jfif" alt="" class="expandable" id="test-img">
          </div>
        </div>
      </div>
    </main>

  </body>
  
<!-- Reutilización de el footer -->

  <?php include '../rutadelsaber/include/footer.php'; ?>
  
<!-- Links a Javascript codes -->

<script src="https://kit.fontawesome.com/14fc7e6155.js" crossorigin="anonymous"></script>
<scriptsrc="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></scriptsrc=src=>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
<script src="../rutadelsaber/assets/js/index/script.js"></script>
</html>
