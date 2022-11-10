<?php get_header() ?>
<div class="container-full-page">
<!-- <h1>Single</h1> -->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
    <?php if ( has_post_thumbnail() ): ?>
        <div class="post__thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

      <h1><?php the_title(); ?></h1>

      <div class="post__content">
        <?php the_content(); ?>
      </div>

      <div class="post__meta">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
        <p>
          Par <?php the_author(); ?>
          Publié le <?php the_date(); ?>
          Catégorie <?php the_category(); ?>
          <!-- Avec les étiquettes <?php the_tags(); ?> -->
        </p>
      </div>

      
    </article>
  <?php endwhile; endif; ?>

  <div class="site__navigation">
	<div class="site__navigation__prev">
		<?php previous_post_link( 'Article Précédent<br>%link' ); ?>
    </div>
    <div class="site__navigation__next">
        <?php next_post_link( 'Article Suivant<br>%link' ); ?> 
    </div>
</div>
</div>

<div class="container-w100 bg--gris">
		<?php get_template_part( './parts/newsletter' ); ?>
	</div>

<?php get_footer() ?>