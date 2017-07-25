<?php
/*
Plugin Name: Post-it
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Post-it is a simple visual plugin who give the possibility for an Author to activate a Checkbox with a message at the end of the post. The reader will see at the top of the page message from the Author.
Version:     0.2
Author:      François DEFEVER
Author URI:  https://francoisdefever.com
*/
header('Content-Type: text/plain');
// Add metabox on Admin
add_action('admin_init', 'consoPostIt_init_meta');

// Save Render Metabox
add_action('save_post', 'consoPostIt_save_meta');

// Add Metabox Content on Admin Post
function consoPostIt_init_meta(){
    if (function_exists('add_meta_box')){
        add_meta_box('consoPostIt', 'Ajouter un Post-it', 'consoPostIt_render_metabox', 'post');
    }
}

// Add Html Render in Metabox
function consoPostIt_render_metabox(){
    ?>
    <form>
    <input type="checkbox" name="consoPostIt_check" value=true id='consoPostIt_check'>
    <input type="color" value="#ff0000" name="consoPostIt_textcolor" id="consoPostIt_textcolor"><br>
    <textarea style="width:100%;"name="consoPostIt_content" rows="6" id="consoPostIt_content"></textarea><br>
    </form>
    <?php
}

function consoPostIt_save_meta($post_id){
        $meta = 'consoPostIt_check', 'consoPostIt_textcolor', 'consoPostIt_content';
        $value = $_POST[$meta];

    if (get_post_meta($post_id, $meta)) {
        update_post_meta($post_id, $meta, $value);
    } else if ($value === ''){
        delete_post_meta($post_id, $meta)
    } else {
        add_post_meta($post_id, $meta, $value);
    }
}
