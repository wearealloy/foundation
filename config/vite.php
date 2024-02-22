<?php

use craft\helpers\App;

return [
	'useDevServer' => App::env('ENVIRONMENT') === 'dev' || App::env('CRAFT_ENVIRONMENT') === 'dev',
	'manifestPath' => '@manifest',
	'devServerPublic' => App::env('VITE_DEV_URL'),
	'serverPublic' => App::env('PRIMARY_SITE_URL') . 'dist/',
	'errorEntry' => '',
	'cacheKeySuffix' => '',
	'devServerInternal' => App::env('VITE_DEV_URL'),
	'checkDevServer' => App::env('ENVIRONMENT') === 'dev' || App::env('CRAFT_ENVIRONMENT') === 'dev',
	'includeReactRefreshShim' => false,
	'includeModulePreloadShim' => true,
];
