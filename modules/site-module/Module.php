<?php

namespace modules\sitemodule;

use Craft;
use Twig\Extra\Html\HtmlExtension;
use modules\sitemodule\web\twig\Extension;
use yii\base\Module as BaseModule;

/**
 * site-module module
 *
 * @method static Module getInstance()
 */
class Module extends BaseModule
{
    public function init(): void
    {
        Craft::setAlias("@modules/sitemodule", __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->request->isConsoleRequest) {
            $this->controllerNamespace = "modules\\sitemodule\\console\\controllers";
        } else {
            $this->controllerNamespace = "modules\\sitemodule\\controllers";
        }

        parent::init();

        $this->attachEventHandlers();

        // Any code that creates an element query or loads Twig should be deferred until
        // after Craft is fully initialized, to avoid conflicts with other plugins/modules
        Craft::$app->onInit(function () {
            // ...
        });
        Craft::$app->view->registerTwigExtension(new HtmlExtension());
        Craft::$app->view->registerTwigExtension(new Extension());
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/5.x/extend/events.html to get started)
    }
}
