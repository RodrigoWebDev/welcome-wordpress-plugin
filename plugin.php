<?php
/**
 * Plugin Name: Welcome!
 * Description: A plugin that displays your name on admin panel
 * Version: 1.0
 * Author: Rodrigo Queiroz
 * Author URI: https://rqueiroz.netlify.com/s
 */

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

add_action('admin_footer', 'my_admin_footer_function');

function my_admin_footer_function() {
    $user_name = wp_get_current_user()->data->display_name;
    //echo '<p class="user-name">'.$user_name.'</p>';
    echo '<script>
    var $ = jQuery;
$(".welcome-panel-content h2").html(
  $(".welcome-panel-content h2")
    .html()
    .split("!")[0]
);
$(".welcome-panel-content h2").append(" <strong>'.$user_name.'</strong>");
    </script>';
}
?>