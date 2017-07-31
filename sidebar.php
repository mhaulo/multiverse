<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Multiverse
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<section id="secondary">
	<div class="sidebar-container">
		<aside class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>

		<aside class="widget-area">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</aside>
	</div>
</section><!-- #secondary -->

