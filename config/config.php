<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

define('HOST', '127.0.0.1:3306');
define('USER', 'geekbrains');
define('PASS', '12345');
define('DB', 'geekbrains');

define('SMALL_IMG_HREF', '/img/small/');
define('BIG_IMG_HREF', '/img/big/');

require __DIR__ . "/../engine/db.php";
require __DIR__ . "/../engine/render.php";
