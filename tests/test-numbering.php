<?php
/**
 * Class Numbering
 *
 * @package Sequential_posts_numbering
 */

/**
 * Sample test case.
 */
class Numbering extends WP_UnitTestCase {
	/**
	 * Make some posts and check it's position.
	 */
	function test_run_sequential_posts_numbering() {

		$some_posts       = $this->factory()->post->create_many( 5 );
		$last_post_id     = $some_posts[0];
		$posts_keys       = array();
		$args             = array(
			'post_type'      => 'post',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'order'          => 'DESC',
			'orderby'        => 'post_date',
		);
		$sequential_posts = get_posts( $args );
		if ( ! empty( $sequential_posts ) ) {

			foreach ( $sequential_posts as $key => $sequential_post ) {

				$posts_keys[ $key ] = $sequential_post->ID;

			}
		}
		$post_id       = $last_post_id;
		$post_position = array_search( $post_id, array_reverse( $posts_keys ) );
		$post_position++;

		$this->assertEquals( intval( $post_position ), 5 );

	}

}
