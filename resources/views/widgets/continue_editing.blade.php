<div class="h-full p-0 card">
    <header class="flex justify-between items-center p-4 border-b dark:border-dark-900">
        <h2 class="flex items-center">
            <div class="w-6 h-6 mr-2 text-gray-800 dark:text-dark-175">
                @cp_svg('icons/light/content-writing')
            </div>
            <span>{{ __('Continue Editing') }}</span>
        </h2>
    </header>
    <div class="p-4">
        <table class="w-full">
          @foreach ($results as $result)
                <tr>
                    <td class="py-1 text-sm align-top text-left">
                        <a href="{{ $result->editUrl() }}" class="font-bold">
                            {{ $result->title }}
                        </a>
                    </td>
                    <td class="py-1 text-xs align-top px-2 text-center">
                        <span class="mt-px ml-2 text-white badge-sm bg-gray-700">
                            {{ $result->collection()->id() }}
                        </span>
                    </td>
                    <td class="py-1 text-xs align-top text-right text-gray-700">
                        {{ $result->updated_at->format(config('statamic.cp.date_format')) }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>