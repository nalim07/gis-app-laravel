<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }

    public static function layout()
    {
        return 'components.layouts.app';
    }
}
