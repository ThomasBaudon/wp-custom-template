<?php get_header(); ?>
	<div class="container-full-page">
			<h1>ARCHIVE</h1>

			<!-- TAGS -->
			<?php 
				if ( is_category() ) {
					$title = "Catégorie : " . single_tag_title( '', false );
				}
				elseif ( is_tag() ) {
					$title = "Étiquette : " . single_tag_title( '', false );
				}
				elseif ( is_search() ) {
					$title = "Vous avez recherché : " . get_search_query();
				}
				else {
					$title = 'Le Blog';
				}
			?>

		<div class="site__blog">
			<main class="site__content">
			<!-- ARTICLE -->
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		
				<article class="post">
					<h2><?php the_title(); ?></h2>
			
					<?php the_post_thumbnail(); ?>
					
					<p class="post__meta">
						Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
						par <?php the_author(); ?> • <?php comments_number(); ?>
					</p>
					
					<?php the_excerpt(); ?>
					
					<p>
						<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
					</p>
				</article>
				<br>
				<hr>
				<br>

			<?php endwhile; endif; ?>
			<?php posts_nav_link(); ?>
			</main>

			<aside class="site__sidebar">
				<ul>
					<?php dynamic_sidebar( 'blog-sidebar' ); ?>
				</ul>
			</aside>
		</div> 



	</div>

	<div class="container-w100 bg--gris">
		<?php get_template_part( './parts/newsletter' ); ?>
	</div>
	
<?php get_footer(); ?>