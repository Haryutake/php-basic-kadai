<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    //class Food作成
      class Food{
    //  プロパティの定義
     private $name;
     private $price;
    //  メソッドの定義
        public function show_price(){
        echo $this->price .'<br>';
        }
    // コンストラクト定義
     public function __construct(string $name,int $price){
         $this->name = $name;
         $this->price = $price;
     }
      }
    // インスタンス化
      $food = new Food('potato',250);
    // 出力
      print_r($food);
      echo '<br>';

    // class Animal作成
      class Animal{
    //  プロパティの定義
     private $name;
     private $height;
     private $weight;
    //  メソッドの定義
    public function show_height(){
      echo $this->height .'<br>';
      }
    // コンストラクト定義
     public function __construct(string $name,int $height,int $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    }
    // インスタンス化
     $Animal = new Animal('dog',60,5000);
    // 出力
     print_r($Animal);
     echo '<br>';

     
    $food->show_price();
    $Animal->show_height();
    ?>
  </p>


</body>

</html>
  