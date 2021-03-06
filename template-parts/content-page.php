<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Verdadera
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <div class="page-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
    
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'verdadera' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->

