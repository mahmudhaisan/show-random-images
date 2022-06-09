<?php

/**
 * Register a custom menu page.
 */
function random_settings_func() {
    add_menu_page(
        __('Random Settings', 'random493'),
        'Random Settings',
        'manage_options',
        'random-settings',
        'random_setting_page',
        'dashicons-controls-repeat',
        45
    );
}
add_action('admin_menu', 'random_settings_func');

function random_setting_page() {
    echo 'hello';
}
