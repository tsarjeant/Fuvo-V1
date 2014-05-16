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



	<?php endwhile; ?>
	<?php else : ?>
	<h1 class="entry-title">We apologize, but something is fouled up here.</h1>
	<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>
