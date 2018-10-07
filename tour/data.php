<?php

//データの定義部分
require_once('tour.php');
//インスタンスを生成＆変数に代入
  $china = new Tour('CHINA','20万','4月4日',"tour-img/china.jpg");
  $korea = new Tour('KOREA','30万','4月5日',"tour-img/korea.jpg");
  $thai = new Tour('THAI','40万','4月6日',"tour-img/thai.jpg");
  $okinawa = new Tour('OKINAWA','50万','4月7日',"tour-img/okinawa.jpg");

  //各インスタンスを配列に収納
  $tours = array($china,$korea,$thai,$okinawa);

 ?>
