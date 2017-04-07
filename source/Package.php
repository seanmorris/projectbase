<?php
namespace SeanMorris\Iifym;
class Package extends \SeanMorris\Ids\Package
{
	protected static
		$tables = [
			'main' => [
				'iifymProduct'
				, 'iifymGoal'
			]
		]
	;
}