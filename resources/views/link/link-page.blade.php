<!DOCTYPE html>
<html lang="en">
@include('main-components.head-tag', ['alt_title' => 'Link'])

<body>
    @include('main-components.top-nav')

    <div class="container-fluid">
        <div class="row">
            {{-- left Section  --}}
            <section class="col-md-8">
                {{-- Start Left ## 1  --}}
                @livewire('Linkcardinfo', ['viewedLink' => $viewedLink])
                {{-- End Left ## 1  --}}

                {{-- # Start left # 2 --}}
                @include('link.components.tab-nav')
                {{-- # End Left # 2 --}}
            </section>
            {{-- left Section  --}}

            {{-- Start Right  Section  --}}
            <div class="col-md-4">
                <div class="py-4 px-1">
                    <div class="d-flex flex-column justify-content-between align-items-stretchh-100">
                        @livewire('Linkreview', [
                            'linkId' => $viewedLink->id,
                            'user_id' => request()->user()->id,
                        ])

                        <div class="row mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <p>Categroy</p>
                                    <hr>
                                    @isset($viewedLink->category->cat_name)
                                        {{ $viewedLink->category->cat_name }}
                                    @endisset
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="card bg-primary bg-gradient rounded-3">
                                <div class="card-body">
                                    <p>labels and Tags </p>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="card bg-danger bg-gradient rounded-3">
                                <div class="card-body">
                                    <p>labels and Tags </p>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="card bg-warning bg-gradient rounded-3 ">
                                <div class="card-body">
                                    <p>labels and Tags </p>
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                                        News
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Right  Section  --}}
        </div>
    </div>

    @include('main-components.js-includes')
    <script>
        $(document).ready(function() {
            $('#description').on('focus', function() {
                $('#description').removeClass('bg-light');
            });
            $('#description').on('blur', function() {
                $('#description').addClass('bg-light');
            });
        });
    </script>
</body>

</html>
