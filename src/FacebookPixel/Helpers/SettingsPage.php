<?php

namespace GiveFBPT\FacebookPixel\Helpers;

use InvalidArgumentException;

/**
 * Helper class responsible for adding settings pages.
 *
 * @package     GiveFBPT\Addon\Helpers
 * @copyright   Copyright (c) 2020, GiveWP
 */
class SettingsPage {

	/**
	 * Register settings page.
	 *
	 * @param string $class subclass of Give_Settings_Page
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function registerPage( $class ) {
		add_filter(
			'give-settings_get_settings_pages',
			function() use ( $class ) {
				if ( ! class_exists( $class ) ) {
					throw new InvalidArgumentException( "The class {$class} does not exist" );
				}

				if ( ! is_subclass_of( $class, \Give_Settings_Page::class ) ) {
					throw new InvalidArgumentException(
						"{$class} class must extend the Give_Settings_Page class"
					);
				}

				return give( $class )->get_settings();
			}
		);
	}

	/**
	 * Add settings to the existing Settings page.
	 *
	 * @param string $settingsId - settings page ID
	 * @param string $sectionId - settings page section
	 * @param array  $settings
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function addSettings( $settingsId, $sectionId, $settings ) {
		add_filter(
			sprintf( 'give_get_settings_%s', $settingsId ),
			function( $pageSettings ) use ( $settingsId, $sectionId, $settings ) {
				// Check settings page and section
				if ( ! \Give_Admin_Settings::is_setting_page( $settingsId, $sectionId ) ) {
					return $pageSettings;
				}
				return array_merge( $pageSettings, $settings );
			}
		);
	}

	/**
	 * Add Settings page section.
	 *
	 * @param string $settingsId - settings page ID
	 * @param string $sectionId
	 * @param string $sectionName
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function addPageSection( $settingsId, $sectionId, $sectionName ) {
		add_filter(
			sprintf( 'give_get_sections_%s', $settingsId ),
			function( $sections ) use ( $sectionId, $sectionName ) {
				$sections[ $sectionId ] = $sectionName;
				return $sections;
			}
		);
	}

	/**
	 * Add Settings Link tab to plugin row.
	 *
	 * @param $actions
	 *
	 * @return array
	 */
	public function addSettingsLink( $actions ) {
		$new_actions = [
			'settings' => sprintf(
				'<a href="%1$s">%2$s</a>',
				admin_url( 'edit.php?post_type=give_forms&page=give-settings&tab=give-fbpt' ),
				__( 'Documentation', 'give-double-the-donation' )
			),
		];

		return array_merge( $new_actions, $actions );
	}


	/**
	 * Remove Settings page section.
	 *
	 * @param string $settingsId - settings page ID
	 * @param string $sectionId
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function removePageSection( $settingsId, $sectionId ) {
		add_filter(
			sprintf( 'give_get_sections_%s', $settingsId ),
			function( $sections ) use ( $sectionId ) {
				if ( isset( $sections[ $sectionId ] ) ) {
					unset( $sections[ $sectionId ] );
				}
				return $sections;
			},
			999
		);
	}
}
