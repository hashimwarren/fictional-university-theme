

<?php

function university_files() { //create a new function that will pull files
    wp_enqueue_style('university_main_styles', get_stylesheet_uri() ); //name it, then get stylesheet
}

add_action( 'wp_enqueue_scripts', 'university_files' ) //call the function when the script runs


?>