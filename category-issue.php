<?php get_header(); ?>

      <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
		<?php if ( have_posts() ) : ?>
            
            <div class="category-page">
            
                <div class="page-header">
                    <h1>All Issues</h1>
                </div>

                <div id="flexgrid">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="griditem">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', $attr ); ?>
                                <p><?php the_title();?></p>
                            </a>
                        </div>

                    <?php endwhile; ?>
                </div>
                
            </div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>