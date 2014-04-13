<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>

<div class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
	<div class="single-post">
		<?php the_content(); ?>
	</div>
	
	<?php endwhile; ?>

	<?php else : ?>


	<?php endif; ?>
</div>

<?php get_footer(); ?>