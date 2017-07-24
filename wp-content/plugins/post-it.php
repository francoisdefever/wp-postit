<?php
/*
Plugin Name: Post-it
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Post-it is a simple visual plugin who give the possibility for an Author to activate a Checkbox with a message at the end of the post. The reader will see at the top of the page message from the Author.
Version:     0.1
Author:      François DEFEVER
Author URI:  https://francoisdefever.com
License:
License URI:
Text Domain:
Domain Path:
*/
function post_it_install(){
    register_activation_hook();

    register_deactivation_hook();
}

function post_it_create(){

}

function post_it_read(){

}
