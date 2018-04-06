<?php
/**
 * Plugin Name:     Sequential Posts Numbering
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     This plugin will serialize posts on your published posts. Since this plugin simply outputs numbers only, it's up to you to incorporate it into html or styling with CSS. :)
 * Author:          Shuhei Nishimura
 * Author URI:      https://private.hibou-web.com
 * Text Domain:     sequential_posts_numberting
 * Domain Path:     /languages
 * Version:         0.1.0
 * License: GPLv2 or later
 * License URI: http://opensource.org/licenses/gpl-2.0.php GPLv2
 *
 * @package         Sequential_posts_numbering
 */

/**
 * Sequential posts numbering.
 *
 * @param string $post_type      post type.
 * @param int    $posts_per_page posts per page.
 * @param string $post_status    post status.
 *
 * @return int
 */
function sequential_posts_numbering( $post_type = 'post', $posts_per_page = -1, $post_status = 'publish' ) {

	$posts_keys       = array();
	$args             = array(
		'post_type'      => $post_type,
		'posts_per_page' => $posts_per_page,
		'post_status'    => $post_status,
	);
	$sequential_posts = get_posts( $args );
	if ( ! empty( $sequential_posts ) ) {

		foreach ( $sequential_posts as $key => $sequential_post ) {

			$posts_keys[ $key ] = $sequential_post->ID;

		}
	}
	$post_id       = get_the_ID();
	$post_position = array_search( $post_id, array_reverse( $posts_keys ) );
	$post_position++;

	return intval( $post_position );

}
