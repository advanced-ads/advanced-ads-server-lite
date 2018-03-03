<?php

/**
 * Advanced Ads Server Lite
 *
 * @package   Advanced_Ads
 * @author    Thomas Maier <thomas.maier@webgilde.com>
 * @license   GPL-2.0+
 * @link      https://wpadvancedads.com
 * @copyright 2013-2018 Thomas Maier, webgilde GmbH
 *
 * @wordpress-plugin
 * Plugin Name:       Advanced Ads Server Lite
 * Plugin URI:        https://wpadvancedads.com
 * Description:       Allows to use Advanced Ads on other websites
 * Version:           0.1
 * Author:            Thomas Maier
 * Author URI:        https://wpadvancedads.com
 * Text Domain:       advanced-ads-server-lite
 * Domain Path:       /languages
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * makes Advanced Ads post type publically queryable
 * 
 * @since   0.1
 * @param   arr $params Post type parameters.
 * @return  arr $params
 */
add_action( 'advanced-ads-post-type-params', 'advanced_ads_server_post_type_params' );
function advanced_ads_server_post_type_params( $params ){
	
	$params[ 'publicly_queryable' ] = true;
    
	return $params;
}

/**
 * use custom template for the ad post type
 * 
 * @since   0.1
 * @param   string  $template	Template file that is being loaded.
 * @return  string		Template file that should be loaded.
 * 
 */
add_filter( 'template_include', 'advanced_ads_server_ad_template' );
function advanced_ads_server_ad_template( $template ){
    
	$file = false;
    
	if( is_singular( 'advanced_ads' ) ){
		$file = 'ad-template.php';
	}
	
	if ( $file && file_exists( plugin_dir_path( __FILE__ ) . $file ) ) :
		$template = plugin_dir_path( __FILE__ ) . $file;
	endif;
	
	return $template;
}

/**
 * show the ad URL below the title
 * 
 * @since   0.1
 * @param   obj	    $post   WP_POST
 */
add_action( 'edit_form_after_title', 'advanced_ads_show_url_below_title' );
function advanced_ads_show_url_below_title( $post ){
	if ( ! isset($post->post_type) || $post->post_type != 'advanced_ads' ) {
		return;
	}
	
	$input = sprintf( '<input type="text" onclick="this.select();" readonly="readonly" value="%s" style="width:600px;max-width:90%%"/>', get_permalink( $post->ID ) );
	
	printf( __( 'Ad-URL: %s', 'advanced-ads-server-lite' ), $input );
}