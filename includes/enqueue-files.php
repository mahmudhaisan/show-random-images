<?php

function load_plugin_scripts($hook_suffix) {


    wp_enqueue_style('random493_bootstrap', PLUGINS_PATH_ASSETS . 'css/bootstrap.min.css');
    wp_enqueue_style('random493_style', PLUGINS_PATH_ASSETS . 'css/style.css');
    wp_enqueue_script('random493_bootstrap', PLUGINS_PATH_ASSETS . 'js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('random493_script_jquery', PLUGINS_PATH_ASSETS . 'js/script.js', array('jquery'), false, true);
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('my-script-handle', PLUGINS_PATH_ASSETS . 'js/script.js', array('wp-color-picker'), false, true);
}
add_action('init', 'load_plugin_scripts');
