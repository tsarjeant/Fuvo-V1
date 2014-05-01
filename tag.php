<!-- tag.php  -->
<?php /* Template Name: tag */ get_header(); ?>

		<!-- Start the Loop. -->

	<?php printf( __( 'Search Results for: %s', 'Fuvo-V1' ), get_search_query() ); ?>

	<?php while (have_posts()) : the_post(); ?>
   	<div class="results">		
   		<div class="small-hero">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				the_post_thumbnail('');
			}?>
		</div><!-- END small-hero -->
		<div class="small-excerpt">
				<?php
				$post = get_post();
				if (!empty( $post )): ?>
					<a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a>
					<br>
					<?php
						$my_excerpt = get_the_excerpt();
						// $Post = get_post(true);
						
						 echo get_the_excerpt(); // Outputs the processed value to the page
					?>
		</div><!-- END small-excerpt -->
   	
	</div><!-- END results-->
   	<?php endif; ?>	
   	<?php endwhile; ?>				

<?php get_footer(); ?>