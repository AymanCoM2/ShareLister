<div wire:ignore.self class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    <div class="row m-2">
        @foreach ($lists as $list)
            <div class="col-3">
                <div class="card">

                    <div class="card-header">
                        <p>{{ $list->title }}</p>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div>{{ $lists->links() }}</div>
</div>
