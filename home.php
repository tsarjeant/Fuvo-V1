<!-- home.php  -->
<?php /* Template Name: home */ get_header(); ?>


	<div class="post-content">
		<!-- Start the Loop. -->
		<?php
			$page_num = $paged;
			if ($pagenum='') $pagenum =1;
			query_posts('showposts=5&paged='.$page_num); 
		?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- Display the Title as a link to the Post's permalink. -->
			<!-- <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> -->
			
			<!-- Display the Post's content in two parts. The Hero img/vid followed by the excerpt. -->
		<div class="hero">
		<a href="<?php the_permalink() ?>" rel="bookmark">
			<a href="<?php echo get_permalink( $next_post->ID ); ?>">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				the_post_thumbnail('');
			}?></a>

		</a>
		</div>
		<div class="title">
			<a href="<?php the_permalink() ?>" rel="bookmark">
			<h3><?php the_title(); ?></h3></a>
		</div>
		<div class="entry">
			<?php the_excerpt(); ?>
		</div>
		

		<!-- Stop The Loop (but note the "else:" - see next line). -->
		<?php endwhile; else: ?>

		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<p>Sorry, no posts matched your criteria.</p>

		<!-- REALLY stop The Loop. -->
		<?php endif; ?>

	</div>

	


<?php get_footer(); ?>