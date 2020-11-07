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
		<div class="gfbp-docs">
			<h2><img src="<?php echo GIVE_FBPT_URL; ?>/public/images/give-pixel-tracking-icon.jpg" width="50" /><?php _e('GiveWP Facebook Pixel Tracking: How it Works', 'GIVE_FBPT'); ?></h2>
			<p>
				<?php _e('This free add-on is designed to simply work without any configuration or settings at all. Once it is activated, the following events will be triggered on every donation for all of your GiveWP donation forms:.', 'GIVE_FBPT'); ?>
			</p>
			<ul style="list-style:disc;">
				<li><code><strong><?php _e('Donate'); ?></strong></code><br />
					<?php _e('This happens at the successful completion of a donation. It is triggered on the donation confirmation panel only when the donation is marked as "Complete". It does not pass any additional information, it simply indicates that a donation happened. This is useful for helping you build look-alike audiences in your Facebook advertising.', 'GIVE_FBPT'); ?>
				</li>
				<li><code><strong><?php _e('Purchase'); ?></strong></code><br />
					<?php _e('This happens at the successful completion of a donation. It is triggered on the donation confirmation panel only when the donation is marked as "Complete". Because the "Donate" event does not include a donation amount, this event is additionally passed so you can also reflect the effectiveness of your campaigns in terms of monetary conversions.', 'GIVE_FBPT'); ?>
				</li>
				<li><code><strong><?php _e('CompleteRegistration'); ?></strong></code><br />
					<?php _e('This is triggered only if your donation form is configured to create users during the donation process. It is triggered on the donation confirmation panel when a donation is marked as "Complete". It is a singular event, it does not pass donor names or email addresses, only that a successful registration happened.', 'GIVE_FBPT'); ?>
				</li>
			</ul>

			<p><a href="https://developers.facebook.com/docs/facebook-pixel/reference" target="_blank" rel="noopener"><?php _e('You can learn more about these events here.', 'GIVE_FBPT'); ?></a></p>

			<h3><?php _e('Troubleshooting the Facebook Pixel', 'GIVE_FBPT'); ?></h3>
			<p><?php printf(esc_html('The best way to confirm that these events are firing on your donation confirmation panel correctly is to use the %1$sFacebook Pixel Helper Chrome Extension%2$s.', 'GIVE_FBPT'),'<a href="https://www.facebook.com/business/help/198406697184603?id=1205376682832142" target="_blank" rel="noopener">', '</a>'); ?></p>
			<p><?php printf(esc_html('For more information on Facebook Pixel troubleshooting, see %1$sthis guide on the Facebook business knowledgebase%2$s.', 'GIVE_FBPT'),'<a href="https://www.facebook.com/business/help/490934944618455?id=1205376682832142" target="_blank" rel="noopener">', '</a>'); ?></p>
			<h3><?php _e('How to Stop Tracking these Pixel Events', 'GIVE_FBPT'); ?></h3>
			<p><?php printf(esc_html('If you no longer want to trigger these events on your donation forms, simply deactivate this add-on. There is currently no built-in way to enable/disable tracking per form. If you would need that feature for your website, reach out to us via our %1$sSupport forum%2$s.','GIVE_FBPT'),'<a href="https://wordpress.org/support/plugin/give-pixel-tracking" target="_blank" rel="noopener">','</a>');?>
		</div>
		<?php
		echo ob_get_clean();
	}
}
