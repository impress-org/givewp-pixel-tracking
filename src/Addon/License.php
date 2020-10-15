<?php

namespace GiveFBPT\Addon;

class License {

	/**
	 * Check add-on license.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function check() {
		new \Give_License(
			GIVE_FBPT_FILE,
			GIVE_FBPT_NAME,
			GIVE_FBPT_VERSION,
			'GiveWP'
		);
	}
}
