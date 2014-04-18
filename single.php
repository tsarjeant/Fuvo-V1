<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>

<div class="content">
	<div class="post-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="hero">
			<?php the_meta(); ?>
		</div>

		<h3 class="storytitle">
		<a href="<?php the_permalink() ?>" rel="bookmark">
		<?php the_title(); ?></a></h3>

		<div class="entry">
			<?php the_content(); ?>
	
			<?php endwhile; ?>

			<?php else : ?>

			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>