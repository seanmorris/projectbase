<?php
namespace SeanMorris\ProjectBase\Route;
class FrontController implements \SeanMorris\Ids\Routable
{
	public
	$title = 'It works!'
	, $routes = [];

	protected static
	$menus = [
		'main' => [
			'Home' => [
				'_weight'	=> -1
				, '_link'	=> ''
			]
		]
	];

	protected $theme = 'SeanMorris\ProjectBase\Theme\Theme';

	public function index($route)
	{
		return 'It works!';
	}
}