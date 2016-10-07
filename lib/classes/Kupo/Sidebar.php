<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class Sidebar {

	/**
	 * Register sidebars.
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
		add_action('widgets_init', array($this, 'register_sidebars'));
	}

	/**
	 * Register sidebars.
	 */
	public function register_sidebars()
	{
		$this->register_primary_sidebar();
	}

	/**
	 * Register the primary sidebar.
	 */
	private function register_primary_sidebar()
	{
		register_sidebar(array(
			'name' => __('Primary Sidebar', 'flow'),
			'id' => 'sidebar-primary'
		));
	}

}