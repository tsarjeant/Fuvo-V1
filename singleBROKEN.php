<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>
<div class="content">
	<div class="post-content">
Loop 1
	<?php $query1 = new WP_Query();
		while ( $query1->have_posts() ) {
		$query1->the_post(); ?>
	<div class="hero">
		<!-- <a href="<?php the_permalink() ?>" 	rel="bookmark"> -->
		<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail('');
		}?>
	</div>

	<div class="title">
		<h3><?php the_title(); ?></h3>
	</div>

	<div class="entry">
		<?php the_content(); ?>
	</div>
	<div class="tags">
		<?php
			echo get_the_tag_list('<p>Tags: ',', ','</p>');
		?>
	</div>


	<?php 
	} ?>
<!--
 * Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
-->
<?php wp_reset_postdata(); ?>

<?php

/* The 2nd Query (without global var) */
$query2 = new WP_Query(get_next_post);

// The 2nd Loop
while( $query2->have_posts(get_next_post) ) {
	
	}?>
<div class="next-article">
	<div class="next-hero">
				<?php
					$nextPost = get_next_post();
					$nextthumbnail = get_the_post_thumbnail($nextPost->ID, array('customsmall') );
					next_post_link('%link',''.$nextthumbnail.'', false);?>
			</div><!-- END NEXT-HERO -->
<!-- Restore original Post Data -->
</div>
</div>
<?php
wp_reset_postdata();
?>