<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class Embeds {

	/**
	 * Handle embeds.
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
		add_filter('embed_oembed_html', array($this, 'add_wrapper_to_embeds'), 10, 4);
	}

	/**
	 * Add a wrapper element around embeds.
	 */
	public function add_wrapper_to_embeds($html, $url, $attr, $post_ID)
	{
		return '<div class="video-container">'.$html.'</div>';
	}

}