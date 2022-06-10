<?php

/**
 * Register a custom menu page.
 */
function random_settings_func() {
    add_menu_page(
        __('Random Settings', 'random493'),
        'Random Settings',
        'manage_options',
        'random-settings', // slug
        'random_setting_page', // callback
        'dashicons-controls-repeat',
        45
    );
}
add_action('admin_menu', 'random_settings_func');


/**
 * Settings Template Page
 */

function random_setting_page() { ?>

    <div class="wrap">
        <form action="options.php" method="post">
            <?php

            //security field
            settings_fields('random-settings');


            //output settings section
            do_settings_sections('random-settings');


            //save settings button
            submit_button('Save Setting');



            ?>
        </form>
    </div>


<?php }



/**
 * Settings Tempalate 
 */


function random_settings_init() {


    //total 3 steps to do settings

    //1. Setup settings Section
    //2. Register Settings
    //2. Add Settings Input

    //setup settings section
    add_settings_section(
        'random_settings_section', // id
        'Random Settings Section', // Title
        '', // callback
        'random-settings', // menu slug where this setting will be vidualized
    );

    //register btn bg color field
    register_setting(
        'random-settings', // option group or slug
        'random_settings_btn_bg_field', // option name
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => ''
        )
    );

    // add btn bg color setting
    add_settings_field(
        'random_settings_btn_bg_field', //id
        'Random Button Background', //title or label
        'random_settings_callback', //callback
        'random-settings', // page slug
        'random_settings_section', // settings section id
    );


    //register btn text color field
    register_setting(
        'random-settings', // option group or slug
        'random_settings_btn_text_field', // option name
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => ''
        )
    );

    // add btn text color setting
    add_settings_field(
        'random_settings_btn_text_field', //id
        'Random Button Text Color', //title or label
        'random_settings_btn_text_callback', //callback
        'random-settings', // page slug
        'random_settings_section', // settings section id
    );
}


add_action('admin_init', 'random_settings_init');



/**
 * settings input field template
 * 
 */

function random_settings_callback() {

    $random_btn_bg_color = get_option('random_settings_btn_bg_field');

?>
    <input type="text" name="random_settings_btn_bg_field" class="my-color-field regular-text" value="<?php echo isset($random_btn_bg_color) ? esc_attr($random_btn_bg_color) : ''; ?>" data-default-color="#000000" />

<?php }



function random_settings_btn_text_callback() {

    $random_btn_text_color = get_option('random_settings_btn_text_field');

?>
    <input type="text" name="random_settings_btn_text_field" class="my-color-field regular-text" value="<?php echo isset($random_btn_text_color) ? esc_attr($random_btn_text_color) : ''; ?>" data-default-color="#ffffff" />

<?php }
