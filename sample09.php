<?php
date_default_timezone_set('Asia/Tokyo');

for($i=0; $i<366; $i++):
  $time = strtotime("+$i day"); // String to Timeで文字列をunixタイムスタンプへという意味
  // ''は頑固なコーテーションで何がなんでも表示させる('+' . $day . 'day')と記述が必要になる
  // ""は少し緩くこの中に変数が入っている場合に限り変数の内容を展開する約束になっている
  $day = date('n/j(D)', $time);
  echo $day . '<br />';
endfor;
?>