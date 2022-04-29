<?php
/**
 * Plugin Name:       Big Typing Effect
 * Plugin URI:        https://bigbobnetwork.com/
 * Description:       Creates access to typed.js, and sets up necessary js and css class names.
 * Version:           0.1
 * Requires at least: 5.9
 * Requires PHP:      7.4
 * Author:            Bob Wilson
 * Author URI:        https://bigbobnetwork.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       big-typing-effect
 * Domain Path:       /languages
 */

function big_bob_plugin_scripts() {
  wp_enqueue_style( 'bb-typed-style', plugin_dir_url( __FILE__ ) . '/bb-Typing.css?v=0.1', array() );
  wp_enqueue_script( 'bb-typed-core', esc_url('https://cdn.jsdelivr.net/npm/typed.js@2.0.12'), array(), true );
  wp_enqueue_script( 'bb-typed-plugin', plugin_dir_url( __FILE__ ) . 'bb-Typing.js?v=0.1', array('jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'big_bob_plugin_scripts' );

  