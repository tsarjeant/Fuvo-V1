<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>
<div class="content">
	<div class="post-content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="hero">
			<!-- <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_meta(); ?></a> -->
			<?php the_meta(); ?>
		</div>

		<div class="title">
			<!-- <a href="<?php the_permalink() ?>" rel="bookmark"> -->
			<h3><?php the_title(); ?></h3>
		</div>

		<div class="entry">
			<?php the_content(); ?>

			<?php endwhile; ?>

			<?php else : ?>

			<?php endif; ?>
		</div> <!-- CLOSE ENTRY -->
		<div class="tags">
			<!-- INSTERT CALL FOR TAG LIST HERE -->
			
			<?php
				echo get_the_tag_list('<p>Tags: ',', ','</p>');
			?>
		</div>
	</div> <!-- CLOSE POST-CONTENT -->

<hr>
	<div class="next-article">
		<!-- CALL THE NEXT ARTICLE AND MAKE A LINK-->
		<div class="next-hero">
			<!-- INSTERT NEXT THUMBNAIL WITH A 1/3 Width-->
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_meta( $next_post); ?></a>
		</div>
		<div class="next-excerpt">
			<?php
				$next_post = get_next_post();
				if (!empty( $next_post )): ?>
				<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
				<?php the_excerpt(); ?>
			<?php endif; ?>
		</div>
	</div>

</div> <!-- CLOSE CONTENT -->
<?php get_footer(); ?>