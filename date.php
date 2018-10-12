<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>time-stanp</title>
  </head>
  <body>

    <?php
      // date関数で現在時刻の取得
      $date = date("Y/m/d G:i");
      $mini = date("s");

      // 取得した時刻によって処理分け
      if ($mini >= 0 && $mini <= 30 ){
        $result =  '30秒以下だよ';
      }

      else {
        $result = '30秒以上だよ';
      }
    ?>
<!-- 表示部分 -->
<h1><?php echo $date.'<br>'.$result;?></h1>
<h2><?php echo $mini; ?></h2>

  </body>
</html>
