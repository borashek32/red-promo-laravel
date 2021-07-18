<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Favorite news') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               @if($posts)
                    @foreach($posts as $post)
                        <div class="p-6">
                            <a href="{{ route('post', $post->id) }}">
                                <div class="flex items-center">
                                    <img src="{{ $post->img }}" width="200px" alt="{{ $post->title }}">
                                    <div class="ml-4 text-gray-600 dark:text-gray-400 text-lg leading-7 font-semibold">
                                        {{ $post->title }}
                                        <br>
                                        <p class="text-sm text-gray-600 dark:text-gray-400" style="margin-top: -6px">
                                            Status: {{ $post->status }}
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400" style="margin-top: -6px">
                                            Locale:
                                            @foreach($post->locales as $locale)
                                                {{ $locale->place }}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {{ $post->description }}
                                </div>
                            </div>
                        </div>
                    @endforeach
               @endif
            </div>
        </div>
    </div>
</x-app-layout>
