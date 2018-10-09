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

      <!-- 合計金額の変数の定義 -->
      <?php $totalPayment = 0; ?>

      <?php foreach($tours as $tour): ?>
        <!-- ポストで受け取った個数を変数に代入し、セッターメソッドを実行 -->
        <?php
          $orderCount = $_POST[$tour->getName()];
          $tour->setOrderCount($orderCount);
        ?>
        <!-- 変数に小計を足していく -->
        <?php $totalPayment += $tour->getTotalPrice() ?>

        <p class="tour-amount">
         <?php echo $tour->getName() ?>
         ×
         <?php echo $orderCount ?>人
        </p>
        <p class="tour-price">
          <?php echo $tour->getTotalPrice() ?>万円
        </p>
      <?php endforeach ?>
      <!-- 合計金額の表示 -->
      <p class="total-price">合計金額：<?php echo $totalPayment ?>万円</p>
    </div>
  </body>
</html>
