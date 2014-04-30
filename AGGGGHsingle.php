<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>
<div class="content">
	<div class="post-content">
		<?php
		// The Query
		$query1 = new WP_Query( );

		// The Loop
		if ($query1->have_posts()) : while ( $query1->have_posts()) : $query1->the_post(); ?>	
										
		<div class="next-hero">
			<?php
				$nextPost = get_next_post();
				$nextthumbnail = get_the_post_thumbnail($nextPost->ID, array('300, 200, true') );
				next_post_link('%link',''.$nextthumbnail.'', false);?>
		</div>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div> <!-- Close Post-Content -->



			
</div><!-- END CONTENT -->

<?php get_footer();