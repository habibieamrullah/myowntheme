<?php get_header(); ?>

<div class="sitebody">
	<div class="bodycell cnt">
		<h2>Our latest posts:</h2>
		<div class="latestposts">
			<?php
			$the_query = new WP_Query('posts_per_page=14');

			while($the_query->have_posts()) : $the_query ->
			the_post();
			?>
			<div>
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(__('(more...)')); ?></p>
			</div>
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="bodycell sb">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>