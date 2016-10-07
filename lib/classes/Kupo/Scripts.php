<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class Scripts {

	/**
	 * Handle scripts.
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
		add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
	}

	/**
	 * Enqueue javascript files.
	 */
	public function enqueue_scripts()
	{
		$this->deregister_default_version_of_jquery();
		$this->enqueue_jquery();
		$this->enqueue_vendor_script();
		$this->enqueue_main_script();
	}

	/**
	 * Deregisters the default version of jQuery shipped with Wordpress.
	 */
	private function deregister_default_version_of_jquery()
	{
		wp_deregister_script('jquery');
	}

	/**
	 * Enqueue latest version of jQuery.
	 */
	private function enqueue_jquery()
	{
		wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null, true);
	}

	/**
	 * Enqueue the vendor javascript file.
	 */
	private function enqueue_vendor_script()
	{
		wp_enqueue_script('vendor', get_stylesheet_directory_uri() . '/assets/js/vendor.js', array('jquery'), null, true);
	}

	/**
	 * Enqueue the main javascript file.
	 */
	private function enqueue_main_script()
	{
		wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('vendor'), null, true);
	}

}