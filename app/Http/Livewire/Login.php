<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }

    public static function layout()
    {
        return 'components.layouts.app';
    }
}
