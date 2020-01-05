<?php 
$query_args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'order' => 'ASC',
	'cat' => '3',
);

// The Query
$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
	}
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}
 ?>