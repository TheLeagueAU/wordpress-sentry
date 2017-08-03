<?php

/*
  Plugin Name: Sentry
  Plugin URI: https://github.com/TheLeagueAU/wordpress-sentry
  Description: Sends PHP errors to Sentry
  Version: 1.4.0
  Author: Ryan Bagwell, Oscar Barrett
  Author URI: https://github.com/TheLeagueAU
  License: GPLv2 or later
  License URI: http://www.gnu.org/copyleft/gpl.html
  GitHub Plugin URI: TheLeagueAU/wordpress-sentry
 */

require_once( dirname(__FILE__) . '/class.wp-raven-client.php' );

class WPSentry extends WP_Raven_Client {

    private static $instance = null;

	public function __construct() {
		add_action('admin_menu', array($this, 'addOptionsPage'));

		if (is_admin() && $_POST)
			$this->saveOptions();

		parent::__construct();

        static::$instance = $this;
	}

	public function addOptionsPage() {
		add_options_page('Sentry Error Reporting Settings', 'Sentry', 'edit_pages', 'sentrysettings', array($this, 'printOptionsHTML'));
	}

	public function printOptionsHTML() {
		$error_levels = $this->errorLevelMap;
		$settings = $this->settings;
		require_once( dirname(__FILE__) . '/optionspage.html.php' );
	}

	public function saveOptions() {

		if (!isset($_POST['sentry_dsn']) || !isset($_POST['sentry_reporting_level']))
			return;

		update_option('sentry-settings', array(
			'dsn' => $_POST['sentry_dsn'],
			'reporting_level' => $_POST['sentry_reporting_level']
		));
	}
	
	public function getSettings() {
		return $this->settings;
	}

	public static function load() {
		try {
			$wps = new WPSentry();
		} catch (Exception $e) {
			
		}
	}

    public static function getInstance() {
        return self::$instance;
    }
}

add_action('plugins_loaded', array('WPSentry', 'load'));
