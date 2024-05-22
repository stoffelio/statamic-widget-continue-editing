<div class="h-full p-0 card">
    <header class="flex justify-between items-center p-4 border-b">
        <h2 class="flex items-center">
            <div class="w-6 h-6 mr-2 text-gray-800">
                @cp_svg('icons/light/content-writing')
            </div>
            <span>{{ __('Continue Editing') }}</span>
        </h2>
    </header>
    <table class="px-4 py-2">
      @foreach ($results as $result)
            <tr>
                <td class="text-sm align-top text-left">
                    <a href="{{ $result->editUrl() }}" class="font-bold">
                        {{ $result->title }}
                    </a>
                </td>
                <td class="text-xs align-top px-2 text-center">
                    <span class="mt-px ml-2 text-white badge-sm bg-gray-700">
                        {{ $result->collection()->id() }}
                    </span>
                </td>
                <td class="text-xs align-top text-right text-gray-700">
                    {{ $result->updated_at->format(config('statamic.cp.date_format')) }}
                </td>
            </tr>
        @endforeach
    </table>
</div>
