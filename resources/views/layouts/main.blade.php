<!DOCTYPE html>
<html lang="en">
@include('main-components.head-tag')

<body class="d-flex flex-column min-vh-100">
    @include('main-components.top-nav')
    <div class="py-4">
        @yield('content')
    </div>
    @include('main-components.js-includes')
</body>

</html>
