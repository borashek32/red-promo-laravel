@foreach($locales as $locale)
    <a href="{{ route('locale', $locale->id) }}">
        <p class="ml-4 text-gray-600 dark:text-gray-400 text-lg leading-7 font-semibold">{{ $locale->place }}</p>
    </a>
@endforeach
