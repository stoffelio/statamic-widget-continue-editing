<?php

namespace Webographen\ContinueEditing\Widgets;

use Statamic\Widgets\Widget;
use Statamic\Facades\Entry;
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
        $limit =  $this->config('limit', 5);

        if (strpos("*", $collections) !== false) {
            $results = Entry::query()
                            ->orderBy('updated_at', 'desc')
                            ->limit($limit)
                            ->get();
        } else {
            foreach (explode("|", $collections) as $collection) {
                if (!CollectionAPI::handleExists($collection)) {
                    return "Error: Collection [$collection] doesn't exist.";
                }
            }
            $results = Entry::query()
                            ->whereIn('collection', explode("|", $collections))
                            ->orderBy('updated_at', 'desc')
                            ->limit($limit)
                            ->get();
        }

        $icon = \Statamic::svg('content-writing');

        return view('webographen::widgets.continue_editing', [
            'results' => $results,
            'icon' => $icon
        ]);
    }
}
