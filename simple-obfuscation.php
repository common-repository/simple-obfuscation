<?php
/*
Plugin Name: Simple Obfuscation
Plugin URI: http://obaqblog.blogspot.com/2010/06/simple-obfuscation-plugin-for-wordpress.html
Description: make a form which can obfuscate php scripts
Version: 1.1
Author: obaq
Author URI: http://obaqblog.blogspot.com/
*/
function f1661225032_0($v308237506_6){$v1215595324_4='#\[SO]((?:[^\[]|\[(?!/?SO])|(?R))+)\[/SO]#';if(is_array($v308237506_6)){require_once("functions.php");require_once('form.php');$v308237506_6="";add_action('wp_footer','f2144457429_16');}return preg_replace_callback($v1215595324_4,'f1661225032_0',$v308237506_6);}add_filter('the_content','f1661225032_0'); ?>
