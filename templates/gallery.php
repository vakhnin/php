<?php
header('Content-Type: text/html; charset=utf-8');

$img_array = getRows("SELECT * FROM `images`;");
?>
<h1>Галерея</h1>

<?php foreach ($img_array as $img): ?>
    <a href="?page=gallery&image=<?=$img["id"]?>"><img src="<?=SMALL_IMG_HREF?><?=$img["image"]?>" alt=""></a>
<?php endforeach ?>
