<?php

namespace App\Http\Livewire;

use App\Models\Locale;
use Livewire\Component;

class Locales extends Component
{
    public function render()
    {
        $locales = Locale::all();

        return view('locales', compact('locales'));
    }
}
