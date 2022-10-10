<?php

/** 
*  
* @package Bengal
*
*/

// echo '<pre>';
// print_r(get_template_directory_uri());
// wp_die(filemtime(get_template_directory().'/style.css'));

function bengal_enqueue_scripts(){

wp_enqueue_style('swiper-stylesheet',get_template_directory_uri().'/assets/css/swiper-bundle.min.css',[]);
wp_register_style('fontawesome-css',get_template_directory_uri().'/assets/css/all.min.css',[]);
wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css',[]);
wp_enqueue_style('fontawesome-css');
wp_enqueue_style('bootstrap-css');

wp_enqueue_style('main-css',get_template_directory_uri().'/assets/css/index1.css',['stylesheet'],filemtime(get_template_directory().'/assets/css/index1.css'));
wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');



wp_register_script('Jquery',get_template_directory_uri().'/assets/js/jquery.js',[],[],true);
wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',[],[],true);
wp_register_script('fontawesome-js',get_template_directory_uri().'/assets/js/all.min.js',[],[],true);
wp_register_script('isotope-js',get_template_directory_uri().'/assets/js/isotope.min.js',[],[],true);

wp_enqueue_script('Jquery');
wp_enqueue_script('bootstrap-js');
wp_enqueue_script('fontawesome-js');
wp_enqueue_script('isotope-js');

wp_enqueue_script('swiper-js',get_template_directory_uri().'/assets/js/swiper-bundle.min.js',[],[],true);
wp_enqueue_script('aos-js',get_template_directory_uri().'/assets/js/aos.js',[],filemtime(get_template_directory().'/assets/js/aos.js'),true);  
wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js',['custom-js'],filemtime(get_template_directory().'/assets/js/main.js'),true);
wp_enqueue_script('custom-js',get_template_directory_uri().'/assets/js/custom.js',[],filemtime(get_template_directory().'/assets/js/custom.js'),true);
 
}

add_action('wp_enqueue_scripts','bengal_enqueue_scripts');


?>