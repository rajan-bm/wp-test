<?php

/**
 * The main template file.
 *
 * @package WpTheme
 */

$context = Timber\Timber::context();

Timber\Timber::render( 'index.twig', $context );
