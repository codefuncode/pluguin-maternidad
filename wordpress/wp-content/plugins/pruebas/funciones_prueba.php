<?php

/* Main Plugin File */

function my_plugin_activate()
{

   add_option('Activated_Plugin', 'Plugin-Slug');
   echo "<script>function myFunction() {alert('I am an alert box!');}</script>";
}

register_activation_hook(__FILE__, 'my_plugin_activate');

function load_plugin()
{

   if (is_admin() && get_option('Activated_Plugin') == 'Plugin-Slug') {

      delete_option('Activated_Plugin');

      /* do stuff once right after activation */
      // example: add_action( 'init', 'my_init_function' );
   }
}
add_action('admin_init', 'load_plugin');
