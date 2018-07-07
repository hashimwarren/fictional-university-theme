

<?php

function university_files() { //create a new function that will pull files
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri() ); //name it, then get stylesheet
}

add_action( 'wp_enqueue_scripts', 'university_files' ) //call the function when the script runs


?>