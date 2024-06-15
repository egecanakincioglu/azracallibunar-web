<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azra Çallıbunar</title>
    <link rel="stylesheet" href="src/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
      if (window.location.hash && window.location.hash !== '#') {
        window.location.href = window.location.href.split('#')[0];
      }
    </script>
  </head>

  <body>

    <div class="scrollToTop-btn flex-center">
      <i class="uil uil-arrow-up"></i>
    </div>

    <div class="theme-btn flex-center">
      <i class="uil uil-moon"></i>
      <i class="uil uil-sun"></i>
    </div>
  
    <?php include 'src/Header.php'; ?>
    
    <?php include 'src/Home.php'; ?>

    <?php include 'src/About.php'; ?>

    <?php include 'src/Skills.php'; ?>

    <?php include 'src/Services.php'; ?>

    <?php include 'src/Portfolio.php'; ?>

    <?php include 'src/Contact.php'; ?>

    <?php include 'src/Footer.php'; ?>

    <script src="src/js/swiper-bundle.min.js"></script>
    <script src="src/js/main.js"></script>
    
  </body>

</html>