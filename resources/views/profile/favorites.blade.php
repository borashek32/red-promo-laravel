<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Избранные новости') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @foreach($posts as $post)
                <div class="p-6">
                    <a href="{{ route('post', $post->id) }}">
                        <div class="flex items-center">
                            <img src="{{ $post->img }}" width="200px" alt="{{ $post->title }}">
                            <div class="ml-4 text-gray-600 dark:text-gray-400 text-lg leading-7 font-semibold">
                                {{ $post->title }}
                                <br>
                                <p class="text-sm text-gray-600 dark:text-gray-400" style="margin-top: -6px">
                                    Статус: {{ $post->status }}
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
        </div>
    </div>
</x-app-layout>
