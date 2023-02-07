<?php

namespace App\Http\Livewire\Stuff;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.stuff.home-page')->layout('layouts.app', ['title' => 'Dashboard']);
    }
}
