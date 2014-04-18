<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>
<div class="content">
	<div class="post-content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="hero">
			<!-- <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_meta(); ?></a> -->
			<?php the_meta(); ?>
		</div>

		<div class="storytitle">
			<!-- <a href="<?php the_permalink() ?>" rel="bookmark"> -->
			<h3><?php the_title(); ?></h3>
		</div>

		<div class="entry">
			<?php the_content(); ?>

			<?php endwhile; ?>

			<?php else : ?>

			<?php endif; ?>
		</div> <!-- CLOSE ENTRY -->
		
	</div> <!-- CLOSE POST-CONTENT -->
</div> <!-- CLOSE CONTENT -->
<?php get_footer(); ?>