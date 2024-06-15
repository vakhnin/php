<?php
header('Content-Type: text/html; charset=utf-8');

require "../config/config.php";

$page = 'index';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = array();

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        break;

    case 'catalog':
        $params['title'] = 'Каталог';
        break;

    case 'gallery':
        $params['title'] = 'Галерея';
        break;
        
    case 'about':
        $params['title'] = 'О нас';
        break;

    default:
        die("404");
}

echo render($page, $params);
