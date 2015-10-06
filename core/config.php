<?php
/**
 * Theme definitions.
 *
 * @package  php-pr
 * @category php-pr/config
 * @since 1.0.0
 */

$the_theme = wp_get_theme();
define('THEME_NAME', $the_theme['Name']);
define('THEME_VERSION', $the_theme['Version']);
define('THEME_FX', 'phppr');
define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('SITE_URL', get_bloginfo('url'));
