<?php get_header(); ?>

      <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            
        
        <div id="content-wrapper">
            
            <div id="content">

                <?php if ( have_posts() ): ?>
                
                    <div class="page-header">
                        <h1>Recent Issues</h1>
                    </div>

                    <div id="flexgrid">
                        <?php query_posts(array('category_name' => 'issue'));
                            while ( have_posts() ) : the_post(); ?>

                            <div class="griditem">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', $attr ); ?>
                                    <p><?php the_title();?></p>
                                </a>
                            </div>

                        <?php endwhile; ?>
                    </div>
                
                                
                
                    <div class="page-header">
                        <h1>Featured Content</h1>
                    </div>
                
                    <?php query_posts(array('category_name' => 'exclusive'));
                        while ( have_posts() ) : the_post(); ?>

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
                    <?php endwhile;  ?>

                <?php 
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif; 
                ?>
                
                
            </div>

            <div id="sidebar">
                <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'home_right_1' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>
            
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>