<?php
    require 'config.php';
    $conn = conexion();
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/playervimeo/vimeo_player.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
  
</head>
<body>

<!-- Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E94QPXFRJS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E94QPXFRJS');
</script>
<!-- /Analytics -->


  
  <section data-bs-version="5.1" class="menu menu1 cid-sRC3EDaGYR" once="menu" id="menu1-0">
    

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="https://mobiri.se">MarvelTrailer</a></span>
            </div>
            
            
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="video2 cid-sRC40RAkXj" id="video2-1">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2"><strong>Tienes Hype?</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-0 mt-2 display-7">Mira aquí los trailers de tus peliculas mas esperadas de marvel.</h5>
        </div>
        <div class="row justify-content-center mt-4">
        <?php
                    
                    $query = 'SELECT * FROM video.video;';
                    $result = mysqli_query($conn,$query);
                while($mostrar=mysqli_fetch_array($result)){
                    ?>
            <div class="col-12 col-md-10 video-block">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2"><strong><?php echo $mostrar['nombre']?></strong></h4>
                <div class="video-wrapper"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/<?php echo $mostrar['url'] ?>?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
                
            </div>
            <?php
                }
                ?>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-sRC44VaY1E" id="form5-3">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Agrega tus videos aquí</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="insertar.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="nombre" placeholder="Nombre del Video" data-form-field="nombre" class="form-control" value="" id="nombre">
                        </div>
                        
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="url" name="url" placeholder="Link del video" data-form-field="url" class="form-control" value="" id="url-form5-3" id="url">
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-4">Publicar</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer7 cid-sRC42zaJWy" once="footers" id="footer7-2">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2022 MarvelTrailer - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
  
  
</body>
</html>