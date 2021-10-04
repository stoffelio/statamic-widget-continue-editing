<?php

namespace Webographen\CacheController;

use Statamic\Providers\AddonServiceProvider;
use Webographen\CacheController\Widgets\CacheController;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'webographen';

    protected $widgets = [
        CacheController::class
    ];
}