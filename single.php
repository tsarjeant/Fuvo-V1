<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="post-content">
	<?php
		$query1 = new WP_Query();

		while ( $query1->have_posts($posts) ) {
		$query1->the_post($posts);
		get_the_title();
	}?>
	<div class="hero">
		<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail('');
		}?>
	</div>
	<div class="title">
		<h3><?php the_title(); ?></h3>
	</div>
	<div class="entry">
		<?php echo the_content(); ?>
	</div> <!-- CLOSE ENTRY -->
	<div class="tags">
		<!-- INSTERT CALL FOR TAG LIST HERE -->
		<?php the_tags('Tags: ',' • ','<br />'); ?>
	</div>
	<?php wp_reset_postdata(); ?>

<!--
 * Restore original Post Data
 * NB: Because we are using new WP_Query we aren't stomping on the
 * original $wp_query and it does not need to be reset.
-->


	<div class="next-article">
		<?php
			/* The 2nd Query (without global var) */
			$query2 = new WP_Query();
			// The 2nd Loop
			while( $query2->have_posts() ) {
				$query2->next_post();
				get_the_title($query2->post->ID );
				get_the_excerpt($query2->post->the_excerpt);
		}?>

		<hr>

 		<div class="next-hero">
			<?php
				$nextPost = get_next_post();
				$nextthumbnail = get_the_post_thumbnail($nextPost->ID );
				next_post_link('%link',''.$nextthumbnail.'', false);
			?>
		</div><!-- END NEXT-HERO -->
		<div class="next-excerpt">
				<?php next_post_link( ); ?>
				<br>
				<?php
						$my_excerpt = get_the_excerpt();
						 echo get_the_excerpt();
					?>
		</div><!-- END NEXT-EXCERPT -->

	</div><!-- END NEXT-ARTICLE -->

	<!-- Restore original Post Data -->
	<?php wp_reset_postdata(); ?>


	<?php endwhile; ?>
	<?php else : ?>
	<h1 class="entry-title">We apologize, but something is fouled up here.</h1>
	<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>
