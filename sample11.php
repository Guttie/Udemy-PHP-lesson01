<?php
$fruits = [
  'apple' => 'りんご',
  'grape' => 'ぶどう',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => 'もも',
];
?>
<!-- 連想配列の内容を一覧表示させたい時 -->
<dl>
  <?php foreach ($fruits as $english => $japanese): ?>
    <dt><?php echo $english; ?></dt>
    <dd><?php echo $japanese; ?></dd>
  <?php endforeach; ?>
</dl>