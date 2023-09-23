<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Userlisttab extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view(
            'livewire.userlisttab',
            [
                'lists' => request()->user()->ellists()->paginate(3,pageName: 'list')
            ]
        );
    }
}
