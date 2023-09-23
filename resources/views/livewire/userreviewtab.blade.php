<div wire:ignore.self class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
    <div class="row m-2">
        @foreach ($reviews as $review)
            <div class="col-4">
                <div class="card m-1 p-1">
                    <div class="card-body">
                        <div class="ratings">
                            <i class="fa fa-star  {{ $review->rating >= 1 ? 'text-warning' : 'btn-default' }}"></i>
                            <i class="fa fa-star  {{ $review->rating >= 2 ? 'text-warning' : 'btn-default' }}"></i>
                            <i class="fa fa-star  {{ $review->rating >= 3 ? 'text-warning' : 'btn-default' }}"></i>
                            <i class="fa fa-star  {{ $review->rating >= 4 ? 'text-warning' : 'btn-default' }}"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        Rating : <p>{{ $review->rating }}</p>
                        Content : <p>{{ $review->content }}</p>
                        Link Id : <p>{{ $review->ellink_id }}</p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div>{{ $reviews->links() }}</div>
</div>
