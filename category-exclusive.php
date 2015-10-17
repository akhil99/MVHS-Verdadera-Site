<?php get_header(); ?>

      <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
		<?php if ( have_posts() ) : ?>
                        
            <div class="page-header">
                <h1>Beyond The Print Issue <small>Web Exclusives</small></h1>
            </div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                            <?php the_post_thumbnail('thumbnail', $attr ); ?>
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                          <?php the_excerpt(); ?> 
                      </div>
                    </div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>