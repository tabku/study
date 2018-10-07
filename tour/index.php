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
            <p><?php echo $tour->getName() ?></p>
            <img src="<?php echo $tour->getImg() ?>">
            <p><?php echo $tour->getDate() ?></p>
            <p><?php echo $tour->getTaxInPrice() ?>万円（税込み）</p>
            <p>注文人数：<?php echo $tour->getOrderCount() ?></p>
          </div>
        <?php endforeach ?>
    </div>
  </div>

  </body>
</html>
