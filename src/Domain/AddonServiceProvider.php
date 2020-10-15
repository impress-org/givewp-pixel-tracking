<?php
namespace GiveFBPT\Domain;

use Give\Helpers\Hooks;
use Give\ServiceProviders\ServiceProvider;

use GiveFBPT\Domain\Helpers\SettingsPage;
use GiveFBPT\Domain\SettingsPage as AddonSettingsPage;
use GiveFBPT\Addon\Activation;
use GiveFBPT\Addon\License;
use GiveFBPT\Addon\Language;
use GiveFBPT\Addon\ActivationBanner;

/**
 * Example of a service provider responsible for add-on initialization.
 *
 * @package     GiveFBPT\Addon
 * @copyright   Copyright (c) 2020, GiveWP
 */
class AddonServiceProvider implements ServiceProvider {
	/**
	 * @inheritDoc
	 */
	public function register() {
		give()->singleton( Activation::class );
	}

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

		Hooks::addAction( 'admin_init', License::class, 'check' );
		//Hooks::addAction( 'admin_init', ActivationBanner::class, 'show' );
		
		// Load backend assets.
		Hooks::addAction( 'admin_enqueue_scripts', Assets::class, 'loadBackendAssets' );
		/**
		 * Example of how to extend an existing settings page.
		 */
		// Remove settings page section.
		SettingsPage::removePageSection( 'general', 'access-control' );
		// Add new settings page section.
		SettingsPage::addPageSection( 'general', 'new-section', 'New Access Control Section' );
		// Add page settings.
		SettingsPage::addSettings(
			'general',
			'new-section',
			[
				[
					'name' => __( 'Custom Setting Field', 'GIVE_FBPT' ),
					'id'   => 'custom_setting_field',
					'desc' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'GIVE_FBPT' ),
					'type' => 'text',
				],
			]
		);
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
