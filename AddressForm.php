<?php
/*
Plugin Name:Address Form
Plugin URI: http://shooturpicture.com/
Description: A simple wordpess plugin
Author: Deekshitha
Author URI: http://shooturpicture.com/
Version: 1.0
*/

register_activation_hook(__FILE__, 'address_form_activate');
register_deactivation_hook(__FILE__, 'address_form_deactivate');

//function address_form_activate(){
    
    
//}
//function address_form_deactivate(){
    
//}

add_action('admin_menu','address_form_menu');

function address_form_menu(){
    
    add_menu_page('Address Form','Address Form',8, __FILE__,'Address_form_list');
}

//add_shortcode('address_form_list_shortcode', 'address_form_list');

add_action('wp_body_open', 'tb_head');

function tb_head()
{
    echo '<h3 class="tb">welcome</h3>';
}


function address_form_list(){
    include('address_form_list.php');
    
}

?>