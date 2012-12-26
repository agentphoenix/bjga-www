<?php get_header(); ?>

<section>
	<div class="inner">
		<div class="row-fluid">
			<div class="span9">
				<!--  Content -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->

				<h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
				<p><?php the_content(); ?></p>

				<?php endwhile; ?>
				<!-- post navigation -->

				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</div>

			<div class="span3">
				<br>
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>