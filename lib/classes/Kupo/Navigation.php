<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class Navigation {

	/**
	 * Register navigation menus.
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
		add_action('init', array($this, 'register_navigation_menus'));
	}

	/**
	 * Register navigations menus
	 */
	public function register_navigation_menus()
	{
		$this->register_primary_navigation_menu();
	}

	/**
	 * Registers the primary navigation menu.
	 */
	private function register_primary_navigation_menu()
	{
		register_nav_menu('primary-navigation', __('Primary Navigation'));
	}

}