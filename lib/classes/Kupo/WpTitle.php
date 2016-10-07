<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class WpTitle {

	/**
	 * Initialize.
	 */
	public function __construct()
	{
		$this->add_filters();
	}

	/**
	 * Register filters with Wordpress.
	 */
	private function add_filters()
	{
		add_filter('wp_title', array($this, 'filter_wp_title'), 10, 2);
	}

	/**
	 * Filter the wp_title function for better SEO.
	 * @param  string $title The page title.
	 * @param  string $sep   The separator to use between page title and site title.
	 * @return string        The final page title.
	 */
	public function filter_wp_title($title, $sep)
	{
		global $paged, $page;

		if(is_feed())
			return $title;

		$site_description = get_bloginfo('description', 'display');

		if($site_description && (is_home() || is_front_page()))
			$title = $site_description . ' ' . $sep . ' ';

		if($paged >= 2 || $page >= 2)
			$title = $title . sprintf(__( 'Page %s', 'flow'), max($paged, $page)) . ' ' . $sep . ' ';

		$title .= get_bloginfo('name');

		return $title;
	}

}