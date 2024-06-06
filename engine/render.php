<?php

function render($page, $params = array())
{
    return renderTemplate(LAYOUTS_DIR . 'main', array(
            'title' => $params['title'],
            'menu' => renderTemplate('menu', $params),
            'content' => renderTemplate($page, $params)
        )
    );
}

function renderTemplate($page, $params = array()) {

    ob_start();

    extract($params);

    include TEMPLATES_DIR . $page . ".php";

    return ob_get_clean();
}
