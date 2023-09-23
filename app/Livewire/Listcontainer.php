<?php

namespace App\Livewire;

use App\Models\Ellink;
use App\Models\Ellist;
use Livewire\Attributes\On;
use Livewire\Component;

class Listcontainer extends Component
{
    public $theListId;
    public $viewedList;
    public $allLinks;

    // Upon this Event 'RENDER'
    #[On('edited-link')]
    public function render()
    {
        $this->viewedList =  Ellist::find($this->theListId);
        $this->allLinks = $this->viewedList->ellinks->sortByDesc('updated_at');
        // DB::table('ellink_ellist')
        //     ->where('ellist_id', $this->theListId)
        //     ->get();
        // dd($this->allLinks);
        // $this->allLinks = Ellink::orderBy('updated_at', 'desc')->get();
        // $this->allLinks = DB::table('ellist_tag')->select() ;
        return view('livewire.listcontainer');
    }

    public function updated($key, $value)
    {
        // dd($key);
        // $this->render();
    }

    public function mount($theListId = null)
    {
        $this->theListId = $theListId;
        // $this->viewedList = $viewedList;
        // $this->allLinks = $allLinks;
        // TODO : naming Convention is Important
        // I tried this $this->allViewdItems = $allLinks;
        // But there was an Error !!
        // This Means Inputs to Livewire Components Must Have same Name as Properties Here
    }

    // Just Make a Lister when Adding New List to Render
    #[On('new-url-added')]
    public function updateListItems()
    {
        $this->render();
    }

    public function editLinkToForm($linkId)
    {
        // Show a Modal and Send the Event to It Not to the Form
        $this->dispatch('editing-link', ['linkId' => $linkId]);
    }

    public function deleteLink($linkId)
    {
        $deletedLink  = Ellink::where('id', $linkId)->first();
        $deletedLink->delete();
        //   $this->dispatch('a-link-deleted') ;
    }

    // #[On('edited-link')]
    // public function updateContaner()
    // {
    //     $this->render();
    // }
}
