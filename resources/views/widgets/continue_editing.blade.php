<div class="h-full p-0 card">
    <header class="flex items-center justify-between p-2 border-b">
        <h2 class="flex items-center">
            <div class="w-6 h-6 mr-1 text-gray-800">
                @cp_svg('icons/light/content-writing')
            </div>
            <span>{{ __('Continue Editing') }}</span>
        </h2>
    </header>
    <div class="px-2 py-1">
      @foreach ($results as $result)
            <div class="flex justify-between py-1 text-sm">
                <div class="flex justify-between grow">
                    <a href="{{ $result->editUrl() }}" class="font-bold">
                        {{ $result->title }}
                    </a>
                    <span class="mt-px ml-2 text-white badge-sm bg-gray-700">
                        {{ $result->collection()->id() }}
                    </span> 
                </div>
                <div class="pl-2 text-gray-700">
                    {{ $result->updated_at->format(config('statamic.cp.date_format')) }}
                </div>
            </div>
        @endforeach
    </div>
</div>
