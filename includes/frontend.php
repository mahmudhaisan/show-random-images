<?php


function random493_frontend_meta()
{
    require_once(PLUGINS_PATH . 'includes/html-parts.php');
}


add_shortcode('random-meta', 'random493_frontend_meta');
