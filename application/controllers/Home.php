<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$includes = [
			'includes/slider',
			'includes/banner',
			'includes/best_seller',
			'includes/blog',
			'includes/testiminal',
			'includes/brand',
			'includes/category_1',
			'includes/category_2',
			'includes/category_3'

		];

		$this->load->main($includes);
	}
}
