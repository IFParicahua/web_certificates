<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class PermitComponent extends Component
{
    public function render()
    {
        $usuarios = User::all();
        return view('livewire.permit-component', compact('usuarios'));
    }
}
