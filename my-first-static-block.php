<?php

/**
 * Plugin Name:       My First Static Block
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-first-static-block
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_my_first_static_block_block_init()
{
	// Add the block to the allowed blocks list
	add_filter(
		'mh.gutenberg.allowed-blocks-list',
		static function ($blocks) {
			is_array($blocks) and $blocks[] = 'create-block/my-first-static-block';
			return $blocks;
		}
	);

	register_block_type(__DIR__ . '/build');
}
add_action('init', 'create_block_my_first_static_block_block_init');
