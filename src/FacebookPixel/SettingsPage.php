<?php
namespace GiveFBPT\FacebookPixel;

/**
 * Example code to show how to add setting page to give settings.
 *
 * @package     GiveFBPT\Addon
 * @subpackage  Classes/Give_BP_Admin_Settings
 * @copyright   Copyright (c) 2020, GiveWP
 */
class SettingsPage extends \Give_Settings_Page {

	/**
	 * Settings constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->id          = 'give-fbpt';
		$this->label       = esc_html__( 'Facebook Pixel Tracking', 'GIVE_FBPT' );

		parent::__construct();
	}


	/**
	 * Render settings page output
	 *
	 * @since 1.0.0
	 */
	public function output() {
		ob_start();
		?>
		<div>
			<h2><?php _e('Example Settings Page Output!', 'GIVE_FBPT'); ?></h2>
			<p>
				<?php _e('This is where information for the settings page can go.', 'GIVE_FBPT'); ?>
			</p>
		</div>
		<?php
		echo ob_get_clean();
	}
}
