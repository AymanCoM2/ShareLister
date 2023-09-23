<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/materia-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jasny-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome_6.4.2_css_all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastify.min.css') }}">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />

    @yield('extra-specific-css')
    @isset($alt_title)
        <title>{{ $alt_title }}</title>
    @endisset
    <title>@yield('title')</title>

    <style>
        .searcho {
            background: none repeat scroll 0 0 #ffffff;
            border: 0;
            border-radius: 8px;
            color: #000000;
            font-size: 18px;
            height: 45px;
            padding-left: 10px;
            width: 85%;
            outline: 0
        }

        .searcho:focus::placeholder {
            color: white;
        }

        .searcho:focus {
            background: #00000091 !important;
            color: #ffffff !important;
        }

        .nav-link.dropdown-toggle#secondDropDown::after {
            display: none;
        }

        .btn {
            text-transform: capitalize;
        }


        .tooltipX {
            position: relative;
            display: inline-block;
        }

        .tooltipX .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            top: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltipX .tooltiptext::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltipX:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        .bg-brown {
            background-color: rgb(120, 117, 117);
        }

        .text-brown {
            color: rgb(120, 117, 117);
        }

        .bg-brown:hover {
            background-color: rgb(120, 117, 117);
        }
    </style>
</head>
