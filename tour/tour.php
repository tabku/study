<!-- クラスの定義部分 -->

<?php
  class Tour{

  //プロパティの設定（クラス内のデータ）
    private $name;
    private $price;
    private $date;
    private $img;
    private $orderCount = 0;

  //コンストラクタ (名前と値段と日程の値をプロパティにセット)
    public function __construct($name,$price,$date,$img){
      $this->name = $name;
      $this->price = $price;
      $this->date = $date;
      $this->img = $img;
    }

    //メソッドの設定（クラス内の関数）

      public function getName(){
        return $this->name;
      }

      public function getPrice(){
        return $this->price;
      }

      public function getDate(){
        return $this->date;
      }

      public function getImg(){
        return $this->img;
      }

      public function getOrderCount(){
        return $this->orderCount;
      }


      public function setOrderCount($orderCount){
        $this->orderCount = $orderCount;
      }

      public function getTaxInPrice(){
        return floor($this->price * 1.08);
      }

      public function getTotalPrice(){
        return $this->getTaxInPrice() * $this->orderCount;
      }

}

?>
