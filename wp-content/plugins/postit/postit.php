<?php
/*
Plugin Name: Post-it
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Post-it is a simple visual plugin who give the possibility for an Author to activate a Checkbox with a message at the end of the post. The reader will see at the top of the page message from the Author.
Version:     0.2
Author:      François DEFEVER
Author URI:  https://francoisdefever.com
*/

// Add metabox on Admin
add_action('admin_init', 'consoPostIt_init_meta');

function consoPostIt_init_meta(){
    if (function_exists('add_meta_box')){
        add_meta_box('consoPostIt', 'Ajouter un Post-it', 'consoPostIt_render_metabox', 'post');
    }
}
