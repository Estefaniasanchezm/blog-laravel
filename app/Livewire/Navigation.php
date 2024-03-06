<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.navigation', ['categorias' => $categorias]);
    }
}