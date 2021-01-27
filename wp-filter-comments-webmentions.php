<?php
/**
 * Plugin Name:       Filter Comments by Webmentions
 * Plugin URI:        http://cdevroe.com/projects/wp-filter-comments-webmentions
 * Description:       Inside the WordPress admin you can filter by several comment types. This plugin adds the ability to filter comments by webmentions.
 * Version:           2021.01.0
 * Requires at least: 5.6
 * Requires PHP:      7.0
 * Author:            Colin Devroe
 * Author URI:        http://cdevroe.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-cdevroe-filter-comments-webmentions
 * Domain Path:       /languages
 */

function cdevroe_add_comment_type_webmention_to_dropdown($comment_types) {
    $comment_types["webmention"] = __('Webmentions');
    return $comment_types;
}
add_filter('admin_comment_types_dropdown', 'cdevroe_add_comment_type_webmention_to_dropdown');

 ?>