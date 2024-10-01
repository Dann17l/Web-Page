<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruta del Saber - Thinking Lab</title>
    <link rel="icon" href="/Sources/favicontecnar.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/styles.css/styles/thinking.css">
</head>
<body>

<?php include 'C:\xampp\htdocs\rutadelsaber\header.php'; ?>
<?php include 'C:\xampp\htdocs\rutadelsaber\sidebar.php'; ?>

<div class="container">
    <h1>Thinking Lab</h1>
    
    <section id="carousel" class="carousel">
        <h2>Slider</h2>
        <div class="owl-carousel owl-theme" id="carousel-images">
            <div class="item"><img src="/Sources/Carussel/1.jpeg" alt="Imagen 1"></div>
            <div class="item"><img src="/Sources/Carussel/2.jpeg" alt="Imagen 2"></div>
            <div class="item"><img src="/Sources/Carussel/3.jpeg" alt="Imagen 3"></div>
            <div class="item"><img src="/Sources/Carussel/4.jpeg" alt="Imagen 4"></div>
            <div class="item"><img src="/Sources/Carussel/5.jpeg" alt="Imagen 5"></div>
        </div>
    </section>

    <div class="main-club-container">
        <div class="main-club-card">
            <img src="/Sources/Clubes/Thinking lab.jpeg" alt="Thinking Lab" class="club-img main-club-img">
            <h2 class="club-title">Thinking Lab</h2>
            <p class="club-description">En Thinking Lab nos apasiona el aprendizaje práctico y la exploración de nuevas fronteras del conocimiento...</p>
        </div>
    </div>

    <div class="club-container">
        <div class="club-card">
            <img src="/Sources/Clubes/DatIA.jpeg" alt="DatIA" class="club-img">
            <h2 class="club-title">DatIA</h2>
            <p class="club-description">Bienvenido a Thinking lab, donde pensar lógicamente se convierte en una experiencia de descubrimiento...</p>
        </div>
        <div class="club-card">
            <img src="/Sources/Clubes/MakersLab.jpeg" alt="MakersLab" class="club-img">
            <h2 class="club-title">MakersLab</h2>
            <p class="club-description">Bienvenido a Thinking lab, donde pensar lógicamente se convierte en una experiencia de descubrimiento...</p>
        </div>
        <div class="club-card">
            <img src="/Sources/Clubes/Gambito.jpeg" alt="Gambito" class="club-img">
            <h2 class="club-title">Gambito</h2>
            <p class="club-description">Bienvenido a Thinking lab, donde pensar lógicamente se convierte en una experiencia de descubrimiento...</p>
        </div>
    </div>

</div>

<?php include 'C:\xampp\htdocs\rutadelsaber\footer.php'; ?>

<script src="https://kit.fontawesome.com/14fc7e6155.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="/scripts/index/thinking.js"></script>

</body>
</html>
