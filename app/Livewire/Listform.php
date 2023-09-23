<?php

namespace App\Livewire;

use App\Models\Ellink;
use App\Models\Ellist;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Listform extends Component
{
    #[Rule('required|url')]
    public $url  = '';
    // #[Rule('required|min:3')]
    public $description  = '';
    public $listId;
    public $linkId;

    // #[On('x-y')]
    // public function pipe($list_id)
    // {
    //     $this->listId = $list_id;
    //     $this->render();
    // }
    public function render()
    {
        return view('livewire.listform');
    }

    public function mount($list_id = null)
    {
        $this->listId = $list_id;
    }

    public function insertNewUrl()
    {
        $validated = $this->validate([
            'url' => 'required|url',
            // 'description' => 'required|min:3',
        ]);
        // This is the function Called when the Form is Submitted

        if ($this->linkId) {
            $editedLink  = Ellink::where('id', $this->linkId)->first();
            $editedLink->url  = $this->url;
            $editedLink->description  = $this->description;
            $editedLink->save();
            $this->dispatch('edited-link');
            $this->clearFormFields();
        } else {
            $newLink = new Ellink();
            $newLink->url  = $this->url;
            $newLink->description = $this->description;
            $newLink->save();
            $attachedList = Ellist::find($this->listId);
            // pivot table
            $attachedList->ellinks()->attach($newLink->id);
            $this->clearFormFields();
            // TODO Emit and Event
            $this->dispatch('new-url-added');
            // $this->dispatch('x-y',  ['list_id' => $this->listId])->self();
            // TODO : Storing This Link As One OF the Belongings to this List in Pivot table
        }
    }

    //   #[On('a-link-deleted')]
    public function clearFormFields()
    {
        $this->url  = '';
        $this->description   = '';
        // $this->listId =  '';
    }



    public function connectToUpdate()
    {
        // Connect properties to Fields Of a Model
        // TODO
        // Will need Event
    }

    // $this->dispatch('editing-link', ['linkId' => $linkId]);
    // #[On('editing-link')]
    // public function fillFormEdit($linkId)
    // {
    //     $this->linkId = $linkId;
    //     $this->url  = Ellink::where('id', $linkId)->first()->url;
    //     $this->description = Ellink::where('id', $linkId)->first()->description;
    // }
}
