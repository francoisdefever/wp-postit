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
add_action('admin_init', 'consoPostIt_render_meta');

// Save Render Metabox
add_action('save_post', 'consoPostIt_save_meta');

// Add Metabox Content on Admin Post
function consoPostIt_init_meta(){
    if (function_exists('add_meta_box')){
        add_meta_box('consoPostIt', 'Ajouter un Post-it', 'consoPostIt_render_metabox', 'post');
    }
}

// Add Render Metabox Content (THIS IS THE POSTIT RENDER !)
function consoPostIt_render_meta(){
    global $post;
    add_meta_box('consoPostItTop', 'Attention, un Post it à été laissé !', 'consoPostIt_top_render_metabox', 'post');
    // if (get_post_meta($post->ID, 'consoPostIt_textcolor') || get_post_meta($post->ID, 'consoPostIt_content')  != empty()){
    // }
}

// Add Html Render in Metabox
function consoPostIt_render_metabox(){
    global $post;
    $checked = get_post_meta($post->ID, 'consoPostIt_check', true);
    $colored = get_post_meta($post->ID, 'consoPostIt_textcolor', true);
    $filled = get_post_meta($post->ID, 'consoPostIt_content', true);
    // $all = get_post_meta($post->ID, 'consoPostIt_check', 'consoPostIt_textcolor', 'consoPostIt_content');
    print_r($checked);
    print_r($colored);
    print_r($filled);
    // print_r($post);

    //!!!!!! NOT GOOD !!!!!!!! RELOAD META IN checkbox, Color and Text Area !!!!!! NOT GOOD !!!!!!!!
    ?>
    <form>
    <input type="checkbox" name="consoPostIt_check" value='<?php true ?>' id='consoPostIt_check'>
    <input type="color" value="<?php $colored ?>" name="consoPostIt_textcolor" id="consoPostIt_textcolor"><br>
    <textarea style="width:100%;" value="<?php $filled ?>" name="consoPostIt_content" rows="6" id="consoPostIt_content"></textarea><br>
    </form>
    <?php
}

// Add HTML Top Render Metabox
function consoPostIt_top_render_metabox(){
    global $post;

    $colored = get_post_meta($post->ID, 'consoPostIt_textcolor', true);
    $filled = get_post_meta($post->ID, 'consoPostIt_content', true);

    print_r($colored);
    print_r($filled);

    ?>
        <div style="color:#FFFFFF;width:100%;">
            <p style="color:red;background-color:<?php $colored ?>" >bonjour<?php $filled ?></p>
        </div>
    <?php

}

function consoPostIt_save_meta($post_id){
        // $meta = 'consoPostIt_check', 'consoPostIt_textcolor', 'consoPostIt_content';
        // $value = $_POST['consoPostIt_check', 'consoPostIt_textcolor', 'consoPostIt_content'];

    //SAVE CHECKBOX
    if (get_post_meta($post_id, 'consoPostIt_check')) {
        update_post_meta($post_id, 'consoPostIt_check', $_POST['consoPostIt_check']);
    } else if ($_POST['consoPostIt_check'] === ''){
        delete_post_meta($post_id, 'consoPostIt_check');
    } else {
        add_post_meta($post_id, 'consoPostIt_check', $_POST['consoPostIt_check']);
    }



    //SAVE COLOR PICKER
    if (get_post_meta($post_id, 'consoPostIt_textcolor')) {
        update_post_meta($post_id, 'consoPostIt_textcolor', $_POST['consoPostIt_textcolor']);
    } else if ($_POST['consoPostIt_textcolor'] === ''){
        delete_post_meta($post_id, 'consoPostIt_textcolor');
    } else {
        add_post_meta($post_id, 'consoPostIt_textcolor', $_POST['consoPostIt_textcolor']);
    }

    //SAVE TEXT
    if (get_post_meta($post_id, 'consoPostIt_content')) {
        update_post_meta($post_id, 'consoPostIt_content', $_POST['consoPostIt_content']);
    } else if ($_POST['consoPostIt_content'] === ''){
        delete_post_meta($post_id, 'consoPostIt_content');
    } else {
        add_post_meta($post_id, 'consoPostIt_content', $_POST['consoPostIt_content']);
    }

}
