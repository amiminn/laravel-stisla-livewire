<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboardpage extends Component
{
    public function render()
    {
        return view('livewire.dashboardpage', ['menu' => 'dashboard'])->extends('layouts.app')->section('main');
    }
}
