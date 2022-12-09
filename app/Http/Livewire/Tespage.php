<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tespage extends Component
{
    public function render()
    {
        return view('livewire.tespage')->extends('layouts.app')->section('main');
    }
}
