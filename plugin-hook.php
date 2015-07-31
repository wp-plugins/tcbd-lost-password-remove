<?php
/*
Plugin Name: TCBD Lost Password Remover
Plugin URI: http://demos.tcoderbd.com/wordpress_plugins/tcbd-lost-password-remover
Description: This plugin will enable to remove the lost password link form your Wordpress theme in login page.
Author: Md Touhidul Sadeek
Version: 1.0
Author URI: http://tcoderbd.com
*/

/*  Copyright 2015 tCoderBD (email: info@tcoderbd.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Define Plugin Directory
define('TCBD_REMOVE_LOST_PASSWORD_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


function tcbd_lost_password_remove(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('tcbd-lost-password-remove-js', TCBD_REMOVE_LOST_PASSWORD_PLUGIN_URL.'js/tcbd-lost-password-remove.js', array('jquery'), '1.0', true);
}
add_action('login_enqueue_scripts', 'tcbd_lost_password_remove');

?>