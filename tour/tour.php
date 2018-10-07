<!-- クラスの定義部分 -->

<?php
  class Tour{

  //プロパティの設定（クラス内のデータ）
    public $name;
    public $price;


  //コンストラクタ (名前と値段と日程の値をプロパティにセット)
    public function __construct($name,$price,$date,$img){
      $this->name = $name;
      $this->price = $price;
      $this->date = $date;
      $this->img = $img;
    }

    //メソッドの設定（クラス内の関数）
    public function dateOutPut(){
      echo 'このツアーの日程は'.$this->date.'です。';
    }

    public function priceOutPut(){
      echo 'このツアーの値段は'.$this->price.'です。';
    }
}

?>
