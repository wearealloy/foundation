<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()
    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    ->defaultWeekStartDay(1)
    // Prevent generated URLs from including "index.php"
    ->omitScriptNameInUrls()
    // Preload Single entries as Twig variables
    ->preloadSingles()
    // Prevent user enumeration attacks
    ->preventUserEnumeration()
    // Set the @webroot alias so the clear-caches command knows where to find CP resources
    ->aliases([
        '@webroot' => dirname(__DIR__) . '/web',
        '@web' => App::env('PRIMARY_SITE_URL'),
        '@siteUrl' => App::env('PRIMARY_SITE_URL'),
        '@viteDevServerUrl' => App::env('PRIMARY_SITE_URL') . ':' . App::env('DDEV_VITE_PORT'),
        '@viteServerUrl' => rtrim(App::env('PRIMARY_SITE_URL'), '/') . '/dist/',
        '@fileSystemImagesPath' => App::env('FILESYSTEM_IMAGES_PATH'),
        '@fileSystemImagesUrl' => '@web' . App::env('FILESYSTEM_IMAGES_URL'),
    ])
;