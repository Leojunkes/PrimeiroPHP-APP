<?php

namespace App\Livewire;

use Livewire\Component;




class Teste extends Component
{
    public string $search = '';
    
    public function render()
    {
        return view('livewire.teste');
    }
}
