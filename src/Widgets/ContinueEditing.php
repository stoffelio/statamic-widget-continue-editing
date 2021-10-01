<?php

namespace Webographen\ContinueEditing\Widgets;

use Statamic\Widgets\Widget;
use Statamic\Facades\Collection as CollectionAPI;

class ContinueEditing extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $collections = $this->config('collections', '*');
        $error = "";

        // make sure all collections exist
        if ($collections != "*") {
            foreach (explode("|", $collections) as $collection) {
                if (!CollectionAPI::handleExists($collection)) {
                    $error .= "Error: Collection [$collection] doesn't exist.<br />";
                }
            }
        }

        $icon = \Statamic::svg('content-writing');

        return view('widgets.continue_editing', [
            'error' => $error,
            'collections' => $collections,
            'icon' => $icon,
            'limit' => $this->config('limit', 5),
        ]);
    }
}
