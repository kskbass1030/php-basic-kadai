<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset = "utf-8">
    <title>kadai_016</title>
  </head>

  <body>
    <p>
      <?php
      class Food {
        // プロパティの定義
        private $name;
        private $price;

        // メソッドの定義
        public function show_price() {
          echo $this -> price . '<br>';
        }

        // コンストラクタの定義
        public function __construct(string $name, int $price) {
          $this -> name = $name;
          $this -> price = $price;
        }
      }

      // インスタンス化
      $food = new Food('potato', 250);

      class Animal {
        // プロパティの定義
        private $name;
        private $height;
        private $weight;

        // メソッドの定義
        public function show_height() {
          echo $this -> height . '<br>';
        }

        // コンストラクタの定義
        public function __construct(string $name, int $height, int $weight) {
          $this -> name = $name;
          $this -> height = $height;
          $this -> weight = $weight;
        }
      }

      // インスタンス化
      $animal = new Animal('dog', 60, 5000);

      // 出力
      print_r($food);
      echo '<br>';

      print_r($animal);
      echo '<br>';

      $food -> show_price();
      $animal -> show_height();
      ?>
    </p>
  </body>
</html>