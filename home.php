<!-- home.php  -->
<?php /* Template Name: home */ get_header(); ?>


	<div class="post-content">
		<!-- Start the Loop. -->
		<?php
			$page_num = $paged;
			if ($pagenum='') $pagenum =1;
			query_posts('showposts=9999&paged='.$page_num); 
		?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="hero">
		<a href="<?php the_permalink() ?>" rel="bookmark">
			<a href="<?php echo get_permalink( $next_post->ID ); ?>">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				the_post_thumbnail('');
			}?></a>

		</a>
		</div><!-- END hero -->
		<div class="title">
			<a href="<?php the_permalink() ?>" rel="bookmark">
			<h3><?php the_title(); ?></h3></a>
		</div> <!-- END title -->
		<div class="entry">
			<?php the_excerpt(); ?>
		</div><!-- END entry -->
		

		
		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

	</div><!-- END post-content-->

	


<?php get_footer(); ?>