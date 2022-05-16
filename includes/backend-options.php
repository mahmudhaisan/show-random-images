<?php


add_action('admin_menu', 'random493_adding_menu');

// Add Menu Page to set the plugin in admin backend dashboard
function random493_adding_menu()
{

    add_menu_page(
        "Random Image Options",
        "Show Random Images",
        "manage_options",
        "random-img-menu",
        "random493_main_menu",
        "dashicons-share-alt",
        9
    );

    add_submenu_page(
        "random-img-menu",
        "Random Images Settings",
        "Settings",
        "manage_options",
        "random-img-settings",
        "random493_first_sub_menu"
    );
};



function random493_main_menu()
{
    include(PLUGINS_PATH . 'includes/main-menu-contents.php');
}

function random493_first_sub_menu()
{
    include(PLUGINS_PATH . 'includes/first-sub-menu-contents.php');
}
