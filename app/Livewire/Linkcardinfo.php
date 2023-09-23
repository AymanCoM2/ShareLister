<?php

namespace App\Livewire;

use App\Models\Ellink;
use App\Models\Review;
use Livewire\Component;

class Linkcardinfo extends Component
{
    public $hearts;
    public $poops;
    public $normalRatings;
    public $avg;
    public $viewedLink;

    public $viewedLinkId;
    public function render()
    {
        return view('livewire.linkcardinfo');
    }

    public function mount($viewedLink = null)
    {
        $this->viewedLink = $viewedLink;
        $poops  = Review::where('ellink_id', $viewedLink->id)
            ->where('rating', -1)
            ->count();
        $hearts   = Review::where('ellink_id', $viewedLink->id)
            ->where('rating', -7)
            ->count();
        $Ratings = Review::where('ellink_id', $viewedLink->id)
            ->whereNotIn('rating', ['-1', '-7'])->get(); // TODO use sum()
        $normalRatings = Review::where('ellink_id', $viewedLink->id)
            ->whereNotIn('rating', ['-1', '-7'])
            ->count();
        $total  =  0;
        foreach ($Ratings as $rating) {
            $total += (int)$rating->rating;
        }
        if ($normalRatings == 0) {
            $normalRatings = 1;
        }
        $avg = $total / $normalRatings;
        $this->hearts =  $hearts;
        $this->poops =  $poops;
        $this->normalRatings =  $normalRatings;
        $this->avg =  $avg;
        $this->viewedLink =  $viewedLink;
        $this->viewedLinkId =  $this->viewedLink->id;
    }

    public function poopsy()
    {
        $this->poops  = Review::where('ellink_id', $this->viewedLinkId)
            ->where('rating', -1)
            ->count();
    }

    public function heartsy()
    {
        $this->hearts  = Review::where('ellink_id', $this->viewedLinkId)
            ->where('rating', -7)
            ->count();
    }
    public function normalRatingsy()
    {
        $this->normalRatings  =  Review::where('ellink_id', $this->viewedLinkId)
            ->whereNotIn('rating', ['-1', '-7'])
            ->count();
    }

    public function avgsy()
    {
        $viewedLink = Ellink::find($this->viewedLinkId);
        $this->avg = Review::where('ellink_id', $viewedLink->id)
            ->whereNotIn('rating', ['-1', '-7'])->avg('rating', 1);
    }
}
