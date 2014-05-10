<!-- single.php  -->
<?php /* Template Name: single */ get_header(); ?>
<section class="content">
	<div class="post-content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="hero">
		<!-- <a href="<?php the_permalink() ?>" rel="bookmark"> -->
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				the_post_thumbnail('');
			}?>
			
		<!-- </a> -->
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
			<?php the_tags('Tags: ',' • ','<br />'); ?>
		</div>
	</div> <!-- CLOSE POST-CONTENT -->


	<div class="next-article">
 		<?php rewind_posts(); ?>
  			<?php while (have_posts()) : the_post(); ?>
   			<!-- <h4>Next Vocation:</h4> -->
   			<hr>
   			<div class="next-hero">
				<?php
					$nextPost = get_next_post();
					$nextthumbnail = get_the_post_thumbnail($nextPost->ID );
					
					next_post_link('%link',''.$nextthumbnail.'', false);?>
			</div><!-- END NEXT-HERO -->
			
			<div class="next-excerpt">
				
				<?php
				$next_post = get_next_post();
				if (!empty( $next_post )): ?>
				  <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a>
					
				<br>
				<?php
					$my_excerpt = get_the_excerpt();
					$nextPost = get_next_post(true);
					
					 echo get_the_excerpt($nextPost); // Outputs the processed value to the page
				?>
				
				<?php endif; ?>	

			</div><!-- END NEXT-EXCERPT -->
   	</div><!-- END NEXT-ARTICLE -->	
   	<?php endwhile; ?>				
</section><!-- END CONTENT -->

<?php get_footer(); ?>