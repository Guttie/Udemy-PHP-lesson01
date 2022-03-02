<?php
echo 'オブジェクト指向言語';
echo '<br />';
$today = new DateTime(); // $todayの部分が変数
$today->setTimezone(new DateTimeZone('Asia/Tokyo')); //メソッドを使用する場合は->で繋げる
echo '現在は、 ' . $today->format('G時 i分 s秒') . ' です。';
?>