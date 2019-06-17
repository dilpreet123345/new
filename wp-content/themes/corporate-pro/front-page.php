<?php
/**
 * Corporate Pro
 *
 * This file adds the front page to the Corporate Pro Theme.
 *
 * @package   SEOThemes\CorporatePro
 * @link      https://seothemes.com/themes/corporate-pro
 * @author    SEO Themes
 * @copyright Copyright © 2018 SEO Themes
 * @license   GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

// Check if any front page widgets are active.
if ( is_active_sidebar( 'front-page-1' ) ||
	 is_active_sidebar( 'front-page-2' ) ||
	 is_active_sidebar( 'front-page-3' ) ||
	 is_active_sidebar( 'front-page-4' ) ||
	 is_active_sidebar( 'front-page-5' ) ||
	 is_active_sidebar( 'front-page-6' ) ||
	 is_active_sidebar( 'front-page-7' ) ||
	 is_active_sidebar( 'front-page-8' ) ||
	 is_active_sidebar( 'front-page-9' ) ) {

	// Force full-width-content layout.
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	// Remove content-sidebar-wrap.
	add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

	// Remove default hero section.
	remove_action( 'genesis_before_content_sidebar_wrap', 'corporate_hero_section' );

	// Remove default loop.
	remove_action( 'genesis_loop', 'genesis_do_loop' );

	add_action( 'genesis_loop', 'corporate_front_page_loop' );
	/**
	 * Display front page widgets.
	 *
	 * @since  1.0.0
	 *
	 * @return void
	 */
	function corporate_front_page_loop() {

		// Front page widget area.
		genesis_widget_area( 'front-page-1', array(
			'before' => '<div id="front-page-1" class="front-page-widget front-page-1"><div class="wrap">',
			'after'  => '</div></div>',
		) );

		genesis_widget_area( 'front-page-2', array(
			'before' => '<div id="front-page-2" class="front-page-widget front-page-2"><div class="wrap">',
			'after'  => '</div></div>',
		) );

		genesis_widget_area( 'front-page-3', array(
			'before' => '<div id="front-page-3" class="front-page-widget front-page-3"><div class="wrap">',
			'after'  => '</div></div>',
		) );

		genesis_widget_area( 'front-page-4', array(
			'before' => '<div id="front-page-4" class="front-page-widget front-page-4"><div class="wrap">',
			'after'  => '</div></div>',
		) );

		genesis_widget_area( 'front-page-5', array(
			'before' => '<div id="front-page-5" class="front-page-widget front-page-5"><div class="wrap">',
			'after'  => '</div></div>',
		) );

		genesis_widget_area( 'front-page-6', array(
			'before' => '<div id="front-page-6" class="front-page-widget front-page-6"><div class="wrap">',
			'after'  => '</div></div>',

		) );

		genesis_widget_area( 'front-page-7', array(
			'before' => '<div id="front-page-7" class="front-page-widget front-page-7"><div class="wrap">',
			'after'  => '</div></div>',

		) );

		genesis_widget_area( 'front-page-8', array(
			'before' => '<div id="front-page-8" class="front-page-widget front-page-8"><div class="wrap">',
			'after'  => '</div></div>',
		) );

		genesis_widget_area( 'front-page-9', array(
			'before' => '<div id="front-page-9" class="front-page-widget front-page-9"><div class="wrap">',
			'after'  => '</div></div>',
		) );

	}
}

// Run Genesis.
genesis();
