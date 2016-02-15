<?php 
/*
Plugin Name: Lazyest Gallery Hide Menu
Plugin URI: http://isabelcastillo.com/free-plugins/lazyest-gallery-hide-menu
Description: Hide the Lazyest Gallery admin menu item from all users except administrators. Avoids users deleting your pictures.
Version: 1.2.2
Author: Isabel Castillo
Author URI: http://isabelcastillo.com
License: GPL2

Copyright 2013 - 2016 Isabel Castillo

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

// remove the menu item from non-administrators
function isa_remove_lg_menu() {

	if (!current_user_can('activate_plugins')) {
		remove_menu_page('lazyest-filemanager');
	}
}
add_action( 'admin_menu', 'isa_remove_lg_menu', 999 );