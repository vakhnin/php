<?php
header('Content-Type: text/html; charset=utf-8');

$menu = render_template("inc_menu");

echo render_template("layout", $menu);

function render_template($template, $content="") {
    ob_start();
    include $template . ".php";
    return ob_get_clean();
}
