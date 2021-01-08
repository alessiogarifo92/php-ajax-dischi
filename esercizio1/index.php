<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Esercizio usando include</title>

  </head>

  <?php
    include 'data.php';

   ?>
  <body>

    <header>
      <img src="https://i.kinja-img.com/gawker-media/image/upload/c_scale,f_auto,fl_progressive,pg_1,q_80,w_800/htlaqq0ym182ra7qa8vs.jpg" alt="">
    </header>
    <div id="container">
        <div class="albums">
        <?php
        for($x=0;$x<count($database);$x++) {
            $info = $database[$x];
            ?>
            <div class="alb-info">

              <img src="<?php echo $info['poster'];?>" alt="">
              <p><?php echo $info['title']; ?></p>
              <p><?php echo $info['author']; ?></p>
              <p><?php echo $info['year']; ?></p>

              <br><br>
            </div>
            <?php
            }
            ?>
        </div>
    </div>


  </body>
</html>
