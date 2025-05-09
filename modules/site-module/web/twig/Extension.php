<?php

namespace modules\sitemodule\web\twig;

use Craft;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Newride\Classnames\Classnames as PhpClassnames;

/**
 * Twig extension
 */
class Extension extends AbstractExtension
{
    public function getFunctions()
    {
        // Define custom Twig functions
        // (see https://twig.symfony.com/doc/3.x/advanced.html#functions)
        return [new TwigFunction("cx", [$this, "classNames"])];
    }

    public function classNames(...$classes): string
    {
        return PhpClassnames::make(...$classes);
    }
}
