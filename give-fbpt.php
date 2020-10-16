<?php namespace GiveFBPT;

use GiveFBPT\Addon\Activation;
use GiveFBPT\Addon\Environment;
use GiveFBPT\FacebookPixel\FacebookPixelServiceProvider;

/**
 * Plugin Name: Give - Facebook Pixel Tracking
 * Plugin URI:  https://givewp.com/addons/BOILERPLATE/
 * Description: ADDON_DESCRIPTION
 * Version:     1.0.0
 * Author:      GiveWP
 * Author URI:  https://givewp.com/
 * Text Domain: GIVE_FBPT
 * Domain Path: /languages
 */
defined( 'ABSPATH' ) or exit;

// Add-on name
define( 'GIVE_FBPT_NAME', 'GIVE_FBPT' );

// Versions
define( 'GIVE_FBPT_VERSION', '1.0.0' );
define( 'GIVE_FBPT_MIN_GIVE_VERSION', '2.8.0' );

// Add-on paths
define( 'GIVE_FBPT_FILE', __FILE__ );
define( 'GIVE_FBPT_DIR', plugin_dir_path( GIVE_FBPT_FILE ) );
define( 'GIVE_FBPT_URL', plugin_dir_url( GIVE_FBPT_FILE ) );
define( 'GIVE_FBPT_BASENAME', plugin_basename( GIVE_FBPT_FILE ) );

require GIVE_FBPT_DIR . '/vendor/autoload.php';

// Activate add-on hook.
register_activation_hook( GIVE_FBPT_FILE, [ Activation::class, 'activateAddon' ] );

// Deactivate add-on hook.
register_deactivation_hook( GIVE_FBPT_FILE, [ Activation::class, 'deactivateAddon' ] );

// Uninstall add-on hook.
register_uninstall_hook( GIVE_FBPT_FILE, [ Activation::class, 'uninstallAddon' ] );

// Register the add-on service provider with the GiveWP core.
add_action(
	'before_give_init',
	function () {
		// Check Give min required version.
		if ( Environment::giveMinRequiredVersionCheck() ) {
			give()->registerServiceProvider( FacebookPixelServiceProvider::class );
		}
	}
);

// Check to make sure GiveWP core is installed and compatible with this add-on.
add_action( 'admin_init', [ Environment::class, 'checkEnvironment' ] );
