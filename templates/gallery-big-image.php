<?php
header('Content-Type: text/html; charset=utf-8');

$img = getOneRow("SELECT * FROM `images` WHERE id={$image};");
?>
<h1>Галерея</h1>

<img src="<?=BIG_IMG_HREF?>/<?=$img["image"]?>" alt="">
