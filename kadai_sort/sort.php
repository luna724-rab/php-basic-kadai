<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
<?php

// 独自のソート関数
function sort_2way($array, $order)
{
  if ($order === true) {
    echo '昇順にソートします。<br>';
    sort($array);   // 昇順
  } else {
    echo '降順にソートします。<br>';
    rsort($array);  // 降順
  }

  // 1行ずつ表示
  foreach ($array as $value) {
    echo $value . '<br>';
  }
}

// ソート対象の配列
$nums = [15, 4, 18, 23, 10];

// 昇順
sort_2way($nums, true);

// 改行
echo '<br>';

// 降順
sort_2way($nums, false);

?>
</body>
</html>