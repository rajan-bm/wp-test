<?php

/**
 * Theme setup.
 *
 * @package WpTheme
 */

require_once __DIR__ . '/vendor/autoload.php';

Timber\Timber::init();

add_action(
	'wp_enqueue_scripts',
	static function (): void {
		wp_enqueue_style(
			'wp-theme-style',
			get_stylesheet_uri(),
			array(),
			(string) filemtime( __DIR__ . '/style.css' )
		);
	}
);
