<?php
namespace SeanMorris\Iifym\Theme;
class Theme extends \SeanMorris\Theme\Theme
{
	protected static
	$contextView = [
		'SeanMorris\Iifym\Route\FrontController' => [
			'stack' => 'SeanMorris\Iifym\Theme\Page'
			, 'css' =>[
				'/SeanMorris/Iifym/css/bootstrap.min.css'
				, '/SeanMorris/Iifym/css/bootstrap-responsive.css'
				,'/SeanMorris/PressKit/Css/menu.css'
				, '/SeanMorris/PressKit/Css/Form.css'
				, '/SeanMorris/Message/Styles/Messages.css'
				, '/SeanMorris/PressKit/Css/PressKit.css'
				, '/SeanMorris/Iifym/css/Iifym.css'
			]
			, 'js' => [
				'/SeanMorris/Iifym/js/jquery.js'
				, '/SeanMorris/Iifym/js/bootstrap.js'
				, '/SeanMorris/PressKit/Js/Class.js'
				, '/SeanMorris/PressKit/Js/PressKit.js'
			]
		]
	]
	, $view = [
		'SeanMorris\Access\User' => 'SeanMorris\Iifym\Theme\User'
		, 'SeanMorris\Iifym\Goal' => 'SeanMorris\Iifym\Theme\Goal'
	]
	, $themes = [
		'SeanMorris\PressKit\Theme\Austere\Theme'
	];
}
