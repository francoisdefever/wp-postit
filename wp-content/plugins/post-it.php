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

}

function post_it_uninstall(){

}

/**
 * Display Material to add a Post-it
 */
function post_it_create(){
    echo '
    <div style="margin-top:30px;">
    <form>
    <h2>Ajouter un Post-it</h2><br>
    <input style="margin-top:0px;" type="checkbox" name="Post-it" value="">
    <input type="color" value="#ff0000" name="Post-it-textcolor"><br>
    <textarea name="Post-it-area" rows="6" cols="40"></textarea><br>
    </form>
    </div>
        ';
}

/**
 * Read the Post-it on the Post
 */
function post_it_read(){
    $postit = new wp_query("post_type=post");
}
