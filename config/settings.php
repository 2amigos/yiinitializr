<?php
/**
 * Yiinitializr configuration file.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
$dirname = dirname(__FILE__);
$app = $dirname . '/../../..';
$root = $app . '/..';

return array(
	'yii' => array(
		'path' => $app . '/lib/vendor/yiisoft/yii/framework'
	),
	'yiinitializr' => array(
		'config' => array(
			'console' => $dirname . '/console.php'
		),
		'app' => array(
			'root' => $root,
			'directories' => array(
				'config' => array(
					'main' => $app . '/config',
					'console' => $app . '/config',
					'test' => $app . '/config'
				),
				'runtime' => array(
					$app
				),
				'assets' => array(
					$root . '/www'
				)
			)
		),
	)
);