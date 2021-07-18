@extends('layouts.site')

@section('content')
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            @forelse($posts as $post)
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
                                <p class="text-sm text-gray-600 dark:text-gray-400" style="margin-top: -6px">
                                    Город:
                                    @foreach($post->locales as $locale)
                                        {{ $locale->place }}
                                    @endforeach
                                </p>
                                @include('add')
                            </div>
                        </div>
                    </a>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            {{ $post->description }}
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center" style="margin-left: 6px">
                    We can not find anything, like <strong>{{ request()->query('search') }}</strong>
                </p>
            @endforelse
        </div>
   </div>
@endsection('content)
