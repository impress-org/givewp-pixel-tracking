<?php
namespace GiveFBPT\FacebookPixel;

use \Give\Helpers\Form\Utils as FormUtils;
use \Give\Session\SessionDonation\DonationAccessor;
use \Give_Payment as Donation;

/**
 * Helper class responsible for loading add-on assets.
 *
 * @package     GiveFBPT\Addon
 * @copyright   Copyright (c) 2020, GiveWP
 */
class Assets {

	/**
	 * Load add-on backend assets.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function loadBackendAssets() {
		wp_enqueue_style(
			'give-fbpt-style-backend',
			GIVE_FBPT_URL . 'public/css/give-fbpt-admin.css',
			[],
			GIVE_FBPT_VERSION
		);

		wp_enqueue_script(
			'give-fbpt-script-backend',
			GIVE_FBPT_URL . 'public/js/give-fbpt-admin.js',
			[],
			GIVE_FBPT_VERSION,
			true
		);
	}

	/**
	 * Load add-on front-end assets.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function loadFrontendAssets() {
		if ( FormUtils::isViewingFormReceipt() ) {
			wp_enqueue_style(
				'give-fbpt-style-frontend',
				GIVE_FBPT_URL . 'public/css/give-fbpt.css',
				[],
				GIVE_FBPT_VERSION
			);
	
			wp_enqueue_script(
				'give-fbpt-script-frontend',
				GIVE_FBPT_URL . 'public/js/give-fbpt.js',
				[],
				GIVE_FBPT_VERSION,
				true
			);

			$session    = new DonationAccessor();
			$donation = new Donation( $session->getDonationId() );

			$localized_data = [
				'currency' => $donation->currency,
				'amount' => $donation->total,
			];

			wp_localize_script( 'give-fbpt-script-frontend', 'giveFBPT', $localized_data );

		}
	}
}
