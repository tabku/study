<?php require_once('data.php'); ?>

<!DOCTYPE html>
<html lang=ja>
  <head>
    <meta charset="utf-8">
    <title>Tour</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  <div class="container tour-wrapper">
    <div class="tour-items">
          <!-- ツアーの名前と日程ををforeachで出力する -->
        <?php foreach ($tours as $tour): ?>
          <div class="tour-item">
            <p><?php echo $tour->name ?></p>
            <img src="<?php echo $tour->img ?>">
            <p><?php $tour->dateOutPut(); ?></p>
            <p><?php $tour->priceOutPut(); ?></p>
          </div>
        <?php endforeach ?>
    </div>
  </div>

  </body>
</html>
