<?php
header('Content-Type: text/html; charset=utf-8');

define('SMALL_IMG_DIR', 'img/small/');
define('BIG_IMG_DIR', 'img/big/');

$img_array = scandir(SMALL_IMG_DIR);

foreach ($img_array as $key => $img) {
    if ($img == "." || $img == "..") {
        unset($img_array[$key]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
</head>
<body>
    <?php foreach ($img_array as $img): ?>
        <a href="<?=BIG_IMG_DIR?>/<?=$img?>"><img src="<?=SMALL_IMG_DIR?>/<?=$img?>" alt=""></a> 
    <?php endforeach ?>  
</body>
</html>
