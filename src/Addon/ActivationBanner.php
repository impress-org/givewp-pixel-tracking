<?php

namespace GiveFBPT\Addon;

/**
 * Helper class responsible for showing add-on Activation Banner.
 *
 * @package     GiveFBPT\Addon\Helpers
 * @copyright   Copyright (c) 2020, GiveWP
 */
class ActivationBanner {

	/**
	 * Show activation banner
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function show() {
		// Only runs on admin.
		$args = [
			'file'              => GIVE_FBPT_FILE,
			'name'              => GIVE_FBPT_NAME,
			'version'           => GIVE_FBPT_VERSION,
			'settings_url'      => admin_url( 'edit.php?post_type=give_forms&page=give-settings&tab=give-addon-boilerplate' ),
			'documentation_url' => 'https://givewp.com/documentation/add-ons/boilerplate/',
			'support_url'       => 'https://givewp.com/support/',
			'testing'           => false, // Never leave true.
		];

		new \Give_Addon_Activation_Banner( $args );
	}
}
