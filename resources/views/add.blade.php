@if(auth()->user())
    <form action="{{ route('add', $post->id) }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <button type="submit" class="shadow appearance-none border ml-2 rounded h-9 text-center py-2 px-3 text-gray-700
            leading-tight w-40 focus:outline-none focus:shadow-outline text-xs bg-blue-200">
            Добавить в избранное
        </button>
    </form>
@endif

