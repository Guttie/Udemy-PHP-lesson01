<?php
$i = 1;

while ($i < 366): //条件ないだと5,6行目の処理が行われ、満たさない場合は7行目の処理が行われる
  echo $i . '日<br />';
  $i = $i + 1;
endwhile;
?>