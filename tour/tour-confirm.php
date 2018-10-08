<?php require_once('data.php')  ?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Tour Confirm</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <div class="container tour-confirm-wrapper">
      <h2>ツアー内容詳細</h2>
      <?php foreach($tours as $tour): ?>

        <?php
          $orderCount = $_POST[$tour->getName()];
          $tour->setOrderCount($orderCount);
        ?>

        <p class="tour-amount">
         <?php echo $tour->getName() ?>
         ×
         <?php echo $orderCount ?>人
        </p>

        <p class="tour-price">
          <?php echo $tour->getTotalPrice() ?>万円
        </p>

      <?php endforeach ?>
    </div>




  </body>
</html>
