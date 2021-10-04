<?php

namespace Webographen\ContinueEditing;

use Statamic\Providers\AddonServiceProvider;
use Webographen\ContinueEditing\Widgets\ContinueEditing;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'webographen';

    protected $widgets = [
        ContinueEditing::class
    ];
}