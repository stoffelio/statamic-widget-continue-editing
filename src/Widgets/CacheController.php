<?php

namespace Webographen\CacheController\Widgets;

use Statamic\Widgets\Widget;
use Statamic\Facades\Entry;
use Statamic\Facades\Collection as CollectionAPI;

class CacheController extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        return view('webographen::widgets.cache_controller');
    }
}
