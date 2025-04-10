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
    ->preloadSingles(false)
    // Prevent user enumeration attacks
    ->preventUserEnumeration()
    // Set the @webroot alias so the clear-caches command knows where to find CP resources
    ->aliases([
        '@webroot' => dirname(__DIR__) . '/public_html',
        '@web' => App::env('PRIMARY_SITE_URL'),
        '@siteUrl' => App::env('PRIMARY_SITE_URL'),
        '@url' => App::env('PRIMARY_SITE_URL'),
        '@viteManifest' => App::env('VITE_MANIFEST'),
        '@viteDevUrl' => App::env('VITE_DEV_URL'),
        '@viteBuildUrl' => App::env('VITE_BUILD_URL'),
        '@viteErrorEntry' => App::env('VITE_ERROR_ENTRY'),
        '@assets' => "@webroot/assets",
    ])
;
