<?php

/**
 * The front page template.
 *
 * @package WpTheme
 */

$context = Timber\Timber::context();
$post_id = get_queried_object_id();

$context['hero_title'] = function_exists( 'get_field' )
	? get_field( 'hero_title', $post_id )
	: '';

Timber\Timber::render( 'front-page.twig', $context );
