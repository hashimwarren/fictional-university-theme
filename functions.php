

<?php

function university_files() { //create a new function that will pull files
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true );
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri() ); //name it, then get stylesheet
}

add_action( 'wp_enqueue_scripts', 'university_files' ); //call the function when the script runs

function university_features() {
    add_theme_support('title-tag'); //give wordpress control of the title tag
}

add_action('after_setup_theme', 'university_features' );

/*
* dynamically populate email field with author's email

add_filter( 'gform_field_value_bork', 'populate_event_email');
function populate_event_email() {
    global $post;
    $blah = $post->ID;

    $listSingleChildEvent = toolset_get_related_post(
        $blah,
        'page-events',
        'child'
      );

    return get_post_meta($listSingleChildEvent, 'wpcf-Email_Address', true);

}
*/
?>