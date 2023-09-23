<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithPagination;

class Userreviewtab extends Component
{
    use WithPagination;
    // public $reviews;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.userreviewtab', [
            'reviews' => request()->user()->reviews()->paginate(5, pageName: 'review')
        ]);
        // TODO >> To make him Edit the Review let him Visit the Page of the Site 
    }

    public function mount()
    {
        // $allRevs = request()->user()->reviews();
        // $this->reviews = Review::paginate(5);
    }
}
