<!-- home.php  -->
<?php /* Template Name: home */ get_header(); ?>


	<div class="content">
		<!-- Start the Loop. -->
		<?php
			$page_num = $paged;
			if ($pagenum='') $pagenum =1;
			query_posts('showposts=5&paged='.$page_num); 
		?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="">
			<!-- Display the Title as a link to the Post's permalink. -->
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			<!-- Display the Post's content in a div box. -->
			<div class="hero">
				<?php if(is_home() && has_post_thumbnail()) the_post_thumbnail(); ?>
				
			</div>
			<div class="entry">

				<?php the_excerpt(); ?>
			</div>
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