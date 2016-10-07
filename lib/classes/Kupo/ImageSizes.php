<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class ImageSizes {

	/**
	 * Handle addition of new custom image sizes.
	 */
	public function __construct()
	{
		$this->add_image_sizes();
	}

	/**
	 * Add custom image sizes.
	 */
	private function add_image_sizes()
	{
		//add_image_size('NAME', WIDTH, HEIGHT, HARD_CROPPED);
	}

}