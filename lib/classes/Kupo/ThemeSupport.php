<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class ThemeSupport {

	/**
	 * Handle theme support.
	 */
	public function __construct()
	{
		$this->add_theme_support();
	}

	/**
	 * Add theme support.
	 */
	private function add_theme_support()
	{
		add_theme_support('post-thumbnails');
		add_theme_support('html5', ['search-form']);
	}

}