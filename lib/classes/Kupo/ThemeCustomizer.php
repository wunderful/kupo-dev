<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class ThemeCustomizer {

	/**
	 * Handle theme customizer options.
	 */
	public function __construct()
	{
		$this->add_actions();
	}

	/**
	 * Register actions with Wordpress.
	 */
	private function add_actions()
	{
		add_action('customize_register', array($this, 'register_theme_customizer'));
	}

	/**
	 * Register the theme customizer.
	 */
	public function register_theme_customizer($wp_customize)
	{
		$this->add_logo_setting($wp_customize);
	}

	/**
	 * Add Logo setting.
	 */
	private function add_logo_setting($wp_customize)
	{
		$wp_customize->add_setting('logo', [
			'default' => '',
			'type' => 'theme_mod'
		]);

		$wp_customize->add_control(
			new \WP_Customize_Image_Control(
			$wp_customize,
			'logo',
			[
				'label' => __('Logo', 'kuop'),
				'section' => 'title_tagline',
				'settings' => 'logo'
			] 
		));
	}

}