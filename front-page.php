<?php get_header(); ?>

<div class="container-page">
	<h1>FRONT-PAGE</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>