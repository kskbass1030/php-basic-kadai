<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>kadai_011</title>
  </head>

  <body>
    <p>
      <?php
      $onion_infos = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
      foreach ($onion_infos as $key => $value) {
        echo "{$key}：{$value}<br>";
      }
      ?>
    </p>
  </body>
</html>