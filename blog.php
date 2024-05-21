<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <title>Blog</title>

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

    <!-- Blog Section -->
    <section id="blog">
      <div id="blog-heading">
        <span>My Recent Posts</span>
        <h3>My Blog</h3>
      </div>

      <!-- blog-container -->
      <div class="blog-container">
        <!-- box 1 -->
        <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
        <div class="blog-box">
          <!-- img -->
          <div class="blog-img">
            <img src="img/<?= $row["image"] ?>" alt="blog" />
          </div>
          <!-- text -->
          <div class="blog-text">
            <span><?= $row["judul"] ?></span>
            <a href="konten1.html" class="blog-title"
              ><?= $row["deskripsi"] ?></a
            >
            <p>
              Pada tutorial kali ini akan diajarkan bagaimana cara menginstall
              sistem operasi kali linux
            </p>
            <a href="konten1.html">Read More</a>
          </div>
        </div>
          <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>
        <!-- box 2 -->
      
    </section>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
