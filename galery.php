<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

  <?php include("includes/navbar.php"); ?>

    <!-- Gallery SEction -->
    <div class="container">
      <div class="header">
        <img src="img/foto1.jpg" alt="" />
        <h1>Hanri's Gallery</h1>
      </div>
      <div class="gallery">
        <img src="img/foto2.jpg" alt="" />
        <img src="img/foto3.jpg" alt="" />
        <img src="img/foto4.jpg" alt="" />
      </div>
    </div>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
