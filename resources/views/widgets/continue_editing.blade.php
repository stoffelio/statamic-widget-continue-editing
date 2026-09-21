<div class="bg-white dark:bg-gray-850 rounded-xl ring ring-gray-200 dark:ring-gray-700/80 shadow-ui-md @container/widget" data-ui-card="" data-inset="true">
    <header class="flex items-center min-h-[49px] justify-between border-b border-gray-200 px-4.5 py-2 dark:border-gray-700">
        <div class="flex items-center gap-2.5">
            @cp_svg('icons/pencil-line', 'size-5 shrink-0 text-gray-500')
            <span>{{ __('Continue Editing') }}</span>
        </div>
    </header>
    <div class="px-4 py-2">
        <table class="w-full">
            @foreach ($results as $result)
                <tr>
                    <td class="py-1 text-sm text-left">
                        <a href="{{ $result->editUrl() }}" class="font-medium no-underline hover:underline">
                            {{ $result->get('title') }}
                        </a>
                    </td>
                    <td class="py-1 px-2 text-center">
                        <span class="relative inline-flex items-center justify-center whitespace-nowrap border dark:border-none dark:pb-0.25 font-normal antialiased text-xs leading-5.5 px-2.25 rounded-sm bg-gray-50 dark:bg-gray-800 border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-100">
                            {{ $result->collection()->handle() }}
                        </span>
                    </td>
                    <td class="py-1 text-xs text-right whitespace-nowrap text-gray-500 dark:text-gray-400">
                        {{ $result->updated_at->setTimezone(\Statamic\Statamic::displayTimezone())->format(\Statamic\Statamic::dateTimeFormat()) }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
