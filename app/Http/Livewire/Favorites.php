<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Favorites extends Component
{
    public function render()
    {
        $user  = Auth::user();
        $posts = $user->posts;

        return view('profile.favorites', compact('posts'));
    }
}
