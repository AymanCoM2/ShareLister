<?php

namespace App\Livewire;

use App\Models\Ellist;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Listeditingmodal extends Component
{
    public $theListId;
    public $viewedList;

    // #[Rule('')]
    public $theListTitle;
    public $theListDescription;
    public $theListTags;
    public $theListTagsText;
    public $theListPrivacy;
    public $newTags  = [];
    public function render()
    {
        $this->viewedList =  Ellist::find($this->theListId);
        $this->theListTitle = $this->viewedList->title;
        $this->theListDescription = $this->viewedList->description;
        $this->theListPrivacy = $this->viewedList->isPublic;
        $this->theListTags = $this->viewedList->tags;
        foreach ($this->theListTags as $tag) {
            $this->theListTagsText = $this->theListTagsText . $tag->tagWord . ",";
        }
        return view('livewire.listeditingmodal');
    }

    public function mount($theListId = null)
    {
        $this->theListId = $theListId;
    }


    public function updateTheList()
    {
        $this->viewedList->isPublic  = $this->theListPrivacy;
        $this->viewedList->title  = $this->theListTitle;
        $this->viewedList->description  = $this->theListDescription;

        // Now Collect the Tags and Put them in an Array and Delete all Tags Related 
        // to the List and Write the New Ones Or attach them to the DB  ; 
        // And then Save the Data  ; 
        // Validation Rules For the Tags  ? 
        // Max String Length For it ? 

        // Dispach the Refresh page Event and Reload  ;
        
    }
}
