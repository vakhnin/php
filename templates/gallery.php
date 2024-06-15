<?php
header('Content-Type: text/html; charset=utf-8');

define('SMALL_IMG_HREF', '/img/small/');
define('BIG_IMG_HREF', '/img/big/');

$img_array = getRows("SELECT * FROM `images`;");
?>
<h1>Галерея</h1>

<?php foreach ($img_array as $img): ?>
    <a href="?page=gallery&image=<?=$img["id"]?>"><img src="<?=SMALL_IMG_HREF?><?=$img["image"]?>" alt=""></a>
<?php endforeach ?>
