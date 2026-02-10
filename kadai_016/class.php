<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPクラス課題</title>
</head>
<body>
<?php

// Foodクラス
class Food {
  private $name;
  private $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function show_price() {
    echo $this->price . '<br>';
  }
}

// Animalクラス
class Animal {
  private $name;
  private $height;
  private $weight;

  public function __construct($name, $height, $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function show_height() {
    echo $this->height . '<br>';
  }
}

// インスタンス作成
$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

// インスタンスを出力
print_r($food);
echo '<br>';
print_r($animal);
echo '<br>';

// メソッド実行
$food->show_price();
$animal->show_height();

?>
</body>
</html>