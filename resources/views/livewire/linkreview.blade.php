<div class="row mb-3">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <form action="">
                    <div class="form-group row" id="rating-ability-wrapper">
                        <button type="button" wire:click='poopLink()'
                            class="col btn {{ $reviewValue == -1 ? 'bg-brown' : 'btn-default' }}   btn-md rounded-circle"
                            data-attr="-1" id="rating-star--1">
                            @include('svg.thumbs-down')
                        </button>
                        <button type="button" wire:click='updateReviewValue(1)'
                            class="col btn {{ $reviewValue >= 1 ? 'bg-warning' : 'btn-default' }} btn-md rounded-circle"
                            data-attr="1" id="rating-star-1">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" wire:click='updateReviewValue(2)'
                            class="col btn {{ $reviewValue >= 2 ? 'bg-warning' : 'btn-default' }}  btn-md rounded-circle"
                            data-attr="2" id="rating-star-2">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" wire:click='updateReviewValue(3)'
                            class="col btn {{ $reviewValue >= 3 ? 'bg-warning' : 'btn-default' }}  btn-md rounded-circle"
                            data-attr="3" id="rating-star-3">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" wire:click='updateReviewValue(4)'
                            class="col btn {{ $reviewValue >= 4 ? 'bg-warning' : 'btn-default' }}  btn-md rounded-circle"
                            data-attr="4" id="rating-star-4">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" wire:click='updateReviewValue(5)'
                            class="col btn {{ $reviewValue >= 5 ? 'bg-warning' : 'btn-default' }}  btn-md rounded-circle"
                            data-attr="5" id="rating-star-5">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </button>
                        <button type="button" wire:click='heartLink()'
                            class="col btn {{ $reviewValue == -7 ? 'bg-danger' : 'btn-default' }}  btn-md rounded-circle"
                            data-attr="5" id="rating-star-7">
                            @include('svg.heart')
                        </button>
                        <br>
                        <br>
                    </div>
                </form>
            </div>
            <div class="row my-3">
                <textarea wire:ignore.self id="description" class="form-control bg-light" placeholder="Write Review.."
                    name="description" wire:model.blur="reviewContent"></textarea>
            </div>
        </div>
    </div>
</div>
