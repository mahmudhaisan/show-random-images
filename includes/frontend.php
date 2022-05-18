<?php


function random493_frontend_meta($atts)
{

    $shortcodeArrays = shortcode_atts(array(
        'random-img-category' => 'red'

    ), $atts);


    $args = array(
        'numberposts' => -1,
        'post_type'   => 'random_image_cpt',
        'tax_query' => array(
            array(
                'taxonomy' => 'random493_category', // the custom vocabulary
                'field'    => 'slug',
                'terms'    => array($shortcodeArrays['random-img-category']), // provide the term slugs
            )
        ),

    );


    $random_images_posts = get_posts($args);
    $random_array_key = array_rand($random_images_posts);
    print_r($random_array_key);
    $random_post_output = $random_images_posts[$random_array_key];
    $cpt_post_id = $random_post_output->ID;
    $cpt_post_name = $random_post_output->post_name;
    $cpt_post_content = $random_post_output->post_content;
    $cpt_post_image = get_the_post_thumbnail_url($cpt_post_id, 'full');



    if (empty($cpt_post_name)) {
        $cpt_post_name = 'Default Title';
    }
    if (empty($cpt_post_content)) {
        $cpt_post_content = 'Default Content';
    }
    if (empty($cpt_post_image)) {
        $cpt_post_image = 'https://themesfinity.com/wp-content/uploads/2018/02/default-placeholder.png';
    }

    require_once(PLUGINS_PATH . 'includes/html-parts.php');
}



add_shortcode('random-meta', 'random493_frontend_meta');
