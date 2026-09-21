<?php

namespace Webographen\ContinueEditing\Widgets;

use Statamic\Facades\Collection as CollectionAPI;
use Statamic\Facades\Entry;
use Statamic\Widgets\Widget;

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
        $limit = $this->config('limit', 5);

        $query = Entry::query()
            ->whereNotNull('updated_at')
            ->orderBy('updated_at', 'desc')
            ->limit($limit);

        if (! str_contains($collections, '*')) {
            $handles = explode('|', $collections);

            foreach ($handles as $handle) {
                if (! CollectionAPI::handleExists($handle)) {
                    return "Error: Collection [$handle] doesn't exist.";
                }
            }

            $query->whereIn('collection', $handles);
        }

        return view('webographen::widgets.continue_editing', [
            'results' => $query->get(),
        ]);
    }
}
