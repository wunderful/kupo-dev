<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class EditorStyles {

	private $style_formats = [];

	/**
	 * Register custom editor styles.
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
		add_filter('mce_buttons_2', [$this, 'register_custom_editor_buttons']);
		add_filter('tiny_mce_before_init', [$this, 'register_custom_editor_styles']);
	}

	/**
	 * Register the custom buttons.
	 */
	public function register_custom_editor_buttons($buttons)
	{
		array_unshift($buttons, 'styleselect');
		return $buttons;
	}

	/**
	 * Register custom editor styles.
	 */
	public function register_custom_editor_styles($init_array)
	{
		$this->register_button_style();

		$init_array['style_formats'] = json_encode($this->style_formats);  
	
		return $init_array;  
	}

	/**
	 * Register the button custom style.
	 */
	private function register_button_style()
	{
		$this->style_formats[] = [
			'title'   => 'Button',
			'block'   => 'span',
			'classes' => 'button',
			'wrapper' => false
		];
	}

}