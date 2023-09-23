<section class="col-md-7">
    <div class="py-4">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card" id="list1">
                    <div class="card-body py-2 px-2 px-md-2">
                        <h1 class="h1 text-center mt-2 mb-2 pb-2 text-primary">
                            {{ $viewedList->title }}
                            <div class="tooltipX d-inline">
                                <input type="hidden" value="{{ $viewedList->title }}" id="myInput">
                                <button class="btn" onclick="myCopyFunction()" onmouseout="outFunc()">
                                    <span class="tooltiptext" id="myTooltip">
                                        Copy to clipboard
                                    </span>
                                    <i class="fa-solid fa-link"></i>
                                </button>
                            </div>
                        </h1>

                        <p class="p-3 mx-2">
                            {{ $viewedList->description }}
                        </p>
                        <hr class="my-2" />
                        <ul class="list-group list-group-flush">
                            @foreach ($allLinks as $link)
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="accordion" id="accordionXyz">
                                            <div>
                                                <a id="headingOne" href="{{ route('view-link', $link->id) }}"
                                                    class="link-text">{{ $link->url }}</a>
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            @if ($link->description)
                                                <button class="btn link-toggle linkDescToggler  p-1" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collaps-{{ $link->url }}" aria-expanded="true"
                                                    aria-controls="collaps-{{ $link->url }}">
                                                    <i class="fas fa-caret-down"></i>
                                                </button>
                                            @endif
                                            <a href="#" wire:click.prevent data-bs-toggle="modal"
                                                data-bs-target="#linkEditingModal"
                                                wire:click='editLinkToForm({{ $link->id }})' class="text-info">
                                                <i class="fas fa-pencil-alt" title="Edit"></i>
                                            </a>
                                            <a href="#" wire:click.prevent
                                                wire:click='deleteLink({{ $link->id }})' class="text-danger"
                                                data-bs-toggle="tooltip">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <a href="#" class="text-muted" data-bs-toggle="tooltip"
                                                title="Review the Link">
                                                <i class="fas fa-star"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>

                                <div class="card m-1 p-2">
                                    {{-- show Class Is Removed --}}
                                    <div id="collaps-{{ $link->url }}" class="accordion-collapse collapse "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionXyz">
                                        <div class="accordion-body">
                                            {{ $link->description }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Add more list items as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
