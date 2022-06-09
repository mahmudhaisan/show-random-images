<?php

function load_plugin_scripts()
{
    wp_enqueue_style('random493_bootstrap', PLUGINS_PATH_ASSETS . 'css/bootstrap.min.css');
    wp_enqueue_style('random493_style', PLUGINS_PATH_ASSETS . 'css/style.css');
    wp_enqueue_script('random493_bootstrap', PLUGINS_PATH_ASSETS . 'js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('random493_script_jquery', PLUGINS_PATH_ASSETS . 'js/script.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'load_plugin_scripts');
