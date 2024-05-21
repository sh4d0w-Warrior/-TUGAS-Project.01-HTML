<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

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
    
    <!-- Contact -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Saya</h2>
        <div class="row">
          <div class="contact-isi">
            <div class="contact-right">
                <!-- contact item 1 -->
              <div class="contact-item">
                <div class="contact-item-icon">
                  <a href="#" id="maps"><i data-feather="map"></i></a>
                </div>
                <div class="contact-item-detail">
                    <h4>Address</h4>
                    <p>Jl. P.Sulawesi, Bahu, Kec. Malalayang, Kota Manado</p>
                </div>
                <!-- contact item 2 -->
              <div class="contact-item">
                <div class="contact-item-icon">
                  <a href="#" id="phone"><i data-feather="phone"></i></a>
                </div>
                <div class="contact-item-detail">
                    <h4>Phone</h4>
                    <p>082213679146</p>
                </div>
                <!-- contact item 3 -->
              <div class="contact-item">
                <div class="contact-item-icon">
                  <a href="#" id="email"><i data-feather="mail"></i></a>
                </div>
                <div class="contact-item-detail">
                    <h4>Email</h4>
                    <p>hanrinov0001@gmail.com</p>
                </div>
            </p>
          </div>
        </div>
      </section>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
