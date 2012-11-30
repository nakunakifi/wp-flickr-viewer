<?php
/**
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
function cws_flickr_shortcode_slider( $atts ) {	

	// Enqueue Flexslider Files
        wp_enqueue_style( 'flex-style', WPFLICKR_PLUGIN_URL . 'inc/slider/css/flexslider.css' );
        wp_enqueue_script( 'flex-script', WPFLICKR_PLUGIN_URL .  'inc/slider/js/jquery.flexslider-min.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'flex-init', WPFLICKR_PLUGIN_URL .  'inc/slider/js/flexslider-init.js', array( 'flex-script' ), false, true );
	
	$options = get_option( 'cws_flickr_options' );
	
	// Create instance of CWS_FlickrProApi class	
	$my_slider = new CWS_FlickrProApi( );
	$my_slider = $my_slider->get_slider_display( $atts['photoset_id'] );
									
	return $my_slider;	
}