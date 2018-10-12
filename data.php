<?php

//データの定義部分
require_once('tour.php');
//インスタンスを生成＆変数に代入
  $china = new Tour('CHINA',20,'4月4日',"tour-img/china.jpg");
  $korea = new Tour('KOREA',30,'4月5日',"tour-img/korea.jpg");
  $thai = new Tour('GUNMA',40,'4月6日',"tour-img/thai.jpg");
  $okinawa = new Tour('OKINAWA',50,'4月7日',"tour-img/okinawa.jpg");


  $china->setOrderCount(3);
  //各インスタンスを配列に収納
  $tours = array($china,$korea,$thai,$okinawa);

 ?>
