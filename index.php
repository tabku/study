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
    <form action="tour-confirm.php" method="post">
      <div class="tour-items">
        <p class="tour-count">
          ツアー:<?php echo Tour::getTourCount() ?>カ国
        </p>
            <!-- ツアーの名前と日程ををforeachで出力する -->
          <?php foreach ($tours as $tour): ?>
            <div class="tour-item">
              <p><?php echo $tour->getName() ?></p>
              <img src="<?php echo $tour->getImg() ?>">
              <p><?php echo $tour->getDate() ?></p>
              <p><?php echo $tour->getTaxInPrice() ?>万円（税込み）</p>
              <input type="text" name="<?php echo $tour->getName() ?>" value=0>
              <span>人</span>
            </div>
          <?php endforeach ?>
      </div>
      <input type="submit" value="予約する">
    </form>
  </div>

  </body>
</html>
