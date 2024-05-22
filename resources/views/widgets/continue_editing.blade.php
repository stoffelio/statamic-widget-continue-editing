<div class="h-full p-0 card">
    <header class="flex justify-between items-center p-4 border-b dark:border-dark-900">
        <h2 class="flex items-center">
            <div class="w-6 h-6 mr-2 text-gray-800 dark:text-dark-175">
                @cp_svg('icons/light/content-writing')
            </div>
            <span>{{ __('Continue Editing') }}</span>
        </h2>
    </header>
    <table class="p-4 w-full">
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





@php use function Statamic\trans as __; @endphp

<div class="card p-0 content">
    <div class="py-6 px-8 border-b dark:border-dark-900">
        <h1>Welcome to your Statamic site</h1>
        <p>Here are some helpful links:</p>
    </div>
    <div class="flex flex-wrap p-4">
        <a href="mailto:alex@stoffel.io" class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 dark:hover:bg-dark-575 border border-transparent dark:hover:border-dark-400 rounded-md group">
            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800 dark:text-dark-175">
                @cp_svg('icons/light/email-utility')
            </div>
            <div class="flex-1">
                <h3 class="mb-2 text-blue dark:text-blue-600">Get support</h3>
                <p>Send a support email (in English or German) to get answers to your questions or help with current issues. You will be charged according to your service contract.</p>
            </div>
        </a>
        <a href="https://statamic.dev" class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 dark:hover:bg-dark-575 border border-transparent dark:hover:border-dark-400 rounded-md group">
            <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800 dark:text-dark-175">
                @cp_svg('icons/light/book-pages')
            </div>
            <div class="flex-1">
                <h3 class="mb-2 text-blue dark:text-blue-600">Read the Documentation</h3>
                <p>The official documentation focuses more on developers, but also answers question on how to use the site as an editor.</p>
            </div>
        </a>
    </div>
</div>
