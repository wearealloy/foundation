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
// Enable Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
    ->devMode(App::env('DEV_MODE') ?? false)
// Allow administrative changes
    ->allowAdminChanges(App::env('ALLOW_ADMIN_CHANGES') ?? false)
// Disallow robots
    ->disallowRobots(App::env('DISALLOW_ROBOTS') ?? false)

    ->backupCommand(App::env('CRAFT_ENVIRONMENT') === 'dev' ? App::env('BACKUP_COMMAND') : false)

    ->restoreCommand(App::env('CRAFT_ENVIRONMENT') === 'dev' ? App::env('RESTORE_COMMAND') : false)

    ->aliases([
        '@webroot' => dirname(__DIR__) . App::env('WEBROOT'),
        '@web' => App::env('PRIMARY_SITE_URL'),
        '@siteUrl' => App::env('PRIMARY_SITE_URL'),
        '@viteDevUrl' => App::env('VITE_DEV_URL'),
        '@filesystemMediaPath' => App::env('FILESYSTEM_MEDIA_PATH'),
        '@filesystemMediaUrl' => App::env('FILESYSTEM_MEDIA_URL'),
    ])
;
