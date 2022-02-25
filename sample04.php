<?php
echo '現在時刻の表示';
echo '<br />';
date_default_timezone_set('Asia/Tokyo');
echo date('G時 i分 s秒'); // 大文字小文字は区別されるため注意
?>