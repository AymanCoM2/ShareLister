<?php

namespace App\Livewire;

use App\Models\Ellink;
use Livewire\Attributes\On;
use Livewire\Component;

class Linkeditingmodal extends Component
{
    public $linkId;
    public $url;
    public $description;
    public function render()
    {
        return view('livewire.linkeditingmodal');
    }

    //  $this->dispatch('editing-link', ['linkId' => $linkId]);
    #[On('editing-link')]
    public function fillFormEdit($linkId)
    {
        $this->linkId = $linkId;
        $this->url  = Ellink::where('id', $linkId)->first()->url;
        $this->description = Ellink::where('id', $linkId)->first()->description;
    }


    public function updateTheUrl()
    {
        $validated = $this->validate([
            'url' => 'required|url',
            // 'description' => 'required|min:3',
        ]);
        // This is the function Called when the Form is Submitted

        $editedLink  = Ellink::where('id', $this->linkId)->first();
        $editedLink->url  = $this->url;
        $editedLink->description  = $this->description;
        $editedLink->save();
        $this->dispatch('edited-link');
        $this->clearFormFields();
    }

    public function clearFormFields()
    {
        $this->url  = '';
        $this->description   = '';
        // $this->listId =  ''; // ! Should i Make Id Null ? 
    }
}
