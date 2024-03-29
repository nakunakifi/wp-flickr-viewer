<?php
/**
 * Widgets init
 * 
 * Init the widgets.
 *
 * Copyright (c) 2011, cheshirewebsolutions.com, Ian Kennerley (info@cheshirewebsolutions.com).
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

include_once( WPFLICKR_PLUGIN_PATH . '/widgets/pro/widget-photo-slideshow.php' );
add_action( 'widgets_init', create_function( '', 'return register_widget( "Widget_PhotoSlideshow" );' ) );

// include_once( 'widget-display-albums-carousel.php' );

// Use widgets_init action hook to execute custom function and register widget
// add_action( 'widgets_init', create_function( '', 'return register_widget( "Widget_DisplayAlbums_Carousel" );' ) );