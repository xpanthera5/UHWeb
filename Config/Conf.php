<?php
	namespace Config;

	/**
	 * Conf
	 */
	class Conf
	{
		static $debug = 1;
		static $databases = [
			'default' => [
				'host'		=> 'localhost',
				'database'	=> 'test',
				'login'		=> 'root',
				'password'	=> ''
			]
		];
	}
 ?>