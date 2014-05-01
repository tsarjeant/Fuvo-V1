<!-- search.php  -->
<?php /* Template Name: search */ get_header(); ?>

		<!-- Start the Loop. -->

	<?php while (have_posts()) : the_post(); ?>
   	<?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?>	
   		<div class="small-hero">
			<?php
				$Post = get_post();
				$thumbnail = get_the_post_thumbnail();
				next_post_link('%link',''.$thumbnail.'', false);?>
		</div><!-- END small-hero -->
		<div class="small-excerpt">
				<?php
				$post = get_post();
				if (!empty( $post )): ?>
					<a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a>
					<br>
					<?php
						$my_excerpt = get_the_excerpt();
						$Post = get_post(true);
						
						 echo get_the_excerpt($Post); // Outputs the processed value to the page
					?>
		</div><!-- END small-excerpt -->
   	</div><!-- END small-aricle -->	
   	<?php endif; ?>	
   	<?php endwhile; ?>				


<?php get_footer(); ?>