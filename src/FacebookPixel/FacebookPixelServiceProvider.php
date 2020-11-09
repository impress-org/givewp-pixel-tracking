<?php
namespace GiveFBPT\FacebookPixel;

use Give\Helpers\Hooks;
use Give\ServiceProviders\ServiceProvider;

use GiveFBPT\FacebookPixel\Helpers\SettingsPage;
use GiveFBPT\FacebookPixel\SettingsPage as AddonSettingsPage;
use GiveFBPT\Addon\Language;

/**
 * Example of a service provider responsible for add-on initialization.
 *
 * @package     GiveFBPT\Addon
 * @copyright   Copyright (c) 2020, GiveWP
 */
class FacebookPixelServiceProvider implements ServiceProvider {
	/**
	 * @inheritDoc
	 */
	public function register() {}

	/**
	 * @inheritDoc
	 */
	public function boot() {
		// Load add-on translations.
		Hooks::addAction( 'init', Language::class, 'load' );

		is_admin()
			? $this->loadBackend()
			: $this->loadFrontend();
	}


	/**
	 * Load add-on backend assets.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	private function loadBackend() {
		// Register settings page
		SettingsPage::registerPage( AddonSettingsPage::class );
		
		// Load backend assets.
		Hooks::addAction( 'admin_enqueue_scripts', Assets::class, 'loadBackendAssets' );

		Hooks::addFilter( 'plugin_action_links_' . GIVE_FBPT_BASENAME, SettingsPage::class, 'addSettingsLink' );
		
	}

	/**
	 * Load add-on front-end assets.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	private function loadFrontend() {
		// Load front-end assets.
		Hooks::addAction( 'wp_enqueue_scripts', Assets::class, 'loadFrontendAssets' );
	}
}
