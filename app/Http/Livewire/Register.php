<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register');
    }

    public static function layout()
    {
        return 'components.layouts.app';
    }
}
