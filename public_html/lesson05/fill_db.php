<?php
header('Content-Type: text/html; charset=utf-8');

require "../../config/config.php";

define('SMALL_IMG_DIR', '../img/small/');
define('BIG_IMG_DIR', '../img/big/');

$img_array = scandir(SMALL_IMG_DIR);

foreach ($img_array as $key => $img) {
    if ($img != "." && $img != "..") {
        if (!getOneRow("SELECT * FROM  `images` WHERE `image` = '{$img}';")) {
            executeSQL("INSERT INTO `images` (`id`, `image`) VALUES (NULL, '{$img}');");
        }
    }
}
