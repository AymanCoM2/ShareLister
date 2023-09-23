<!DOCTYPE html>
<html lang="en">
@include('main-components.head-tag')
{{-- //  TODO sending the title to the Page as a param --}}

<body>
    @include('main-components.top-nav')
    <div class="py-4">
        @yield('content')
    </div>
    @include('main-components.js-includes')
</body>

</html>
