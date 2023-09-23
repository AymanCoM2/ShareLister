<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Attributes\On;
use Livewire\Component;

class Linkreview extends Component
{
    public $reviewValue = null;
    public $reviewUserId;
    public $reviewLinkId;
    public $reviewContent = '';
    public $userReview;
    public $linkReviews; //TODO this

    public function render()
    {
        return view('livewire.linkreview');
    }

    public function updated($key, $value)
    {
        // dd($key);
        // Real Time Saving
        // updated includes Blur for example [ Blur with wire model Means update on blur ]
        $this->sumbitReview();
    }
    public function mount($linkId = null, $user_id  = null)
    {
        $this->userReview = Review::where('ellink_id', $linkId)
            ->where('user_id', $user_id)
            ->first();
        if ($this->userReview) {
            $this->reviewLinkId = $this->userReview->ellink_id;
            $this->reviewUserId = $this->userReview->user_id;
            $this->reviewValue = $this->userReview->rating;
            $this->reviewContent = $this->userReview->content;
        } else {
            $this->reviewValue = null;
            $this->reviewContent = '';
            $this->reviewUserId = $user_id;
            $this->reviewLinkId = $linkId;
        }
        // $this->dispatch('monto');
        // dd($this->reviewValue);
    }
    // #[On('click')]
    public function sumbitReview()
    {
        $this->userReview = Review::where('ellink_id', $this->reviewLinkId)
            ->where('user_id', $this->reviewUserId)
            ->first();
        if ($this->userReview) {
            $this->userReview->rating = $this->reviewValue;
            $this->userReview->content = $this->reviewContent;
            $this->userReview->save();
        } else {
            $newReview = new Review();
            $newReview->content = $this->reviewContent;
            $newReview->rating  = $this->reviewValue;
            $newReview->ellink_id  = $this->reviewLinkId;
            $newReview->user_id  = $this->reviewUserId;
            $newReview->save();
        }
    }

    public function clearForm()
    {
        // $this->reviewContent = '';
        // $this->reviewValue = '';
        // $this->reset('reviewContent');// TODO
    }

    public function updateReviewValue($revVal)
    {
        $this->reviewValue = $revVal;
        $this->sumbitReview();
    }

    public function poopLink()
    {
        $this->reviewValue = -1;
        $this->updateReviewValue(-1);
    }
    public function heartLink()
    {
        $this->reviewValue = -7;
        $this->updateReviewValue(-7);
    }
}
