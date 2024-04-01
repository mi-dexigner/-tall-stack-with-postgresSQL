<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    #[Title('Dashboard')]
    #[Url]
    public $search = '';

    public function render()
    {
        return view('livewire.dashboard');
    }
}
