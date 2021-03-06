<?php
/*
Plugin Name: Simple Google Maps
Plugin URI: https://github.com/stas/some-maps
Description: Create maps with markers easily, powered by Google Maps. 
Version: 1.4
Author: Stas Sușcov
Author URI: http://stas.nerd.ro/
*/
?>
<?php
/*  Copyright 2010  Stas Sușcov <stas@nerd.ro>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'SOME_MAPS', '1.4' );
define( 'SOME_MAPS_PATH', __FILE__ );

require_once dirname( __FILE__ ) . '/includes/some-maps.class.php';

SomeMaps::init();
?>