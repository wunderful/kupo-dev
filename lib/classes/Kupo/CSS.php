<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class CSS {

	/**
	 * Handle CSS.
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
		add_action('wp_enqueue_scripts', array($this, 'enqueue_css'));
	}

	/**
	 * Enqueue CSS files.
	 */
	public function enqueue_css()
	{
		$this->enqueue_main_css();
		$this->enqueue_style_css();
	}

	/**
	 * Enqueue the main CSS file.
	 */
	private function enqueue_main_css()
	{
		wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css');
	}

	/**
	 * Enqueue the theme's stylesheet.
	 *
	 * Enqueues the theme's style.css file which allows users to override styles
	 * without needing to recompile the SASS files.
	 */
	private function enqueue_style_css()
	{
		wp_enqueue_style('style', get_stylesheet_uri(), array('main'));
	}

}