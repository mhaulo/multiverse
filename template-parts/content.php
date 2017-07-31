<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Multiverse
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail-container">
		<?php
			if ( ( is_front_page() && is_home() ) || is_archive() ) {
		?>
			<a href="<?php esc_url( the_permalink() ) ?>"><?php the_post_thumbnail( 'fp-grid' ); ?></a>
		<?php
			}
			else {
				the_post_thumbnail();
			}
		?>
	</div>
	
	<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
	?>
			<div class="content-container">
	
	<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'air' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
	?>
			</div>
			
	<?php
        } 
        else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			//the_excerpt();
		}
	?>
			
</article><!-- #post-## -->
