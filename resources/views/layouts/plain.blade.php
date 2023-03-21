<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel Klinik') }}</title>
    <link rel="stylesheet" href="{{ asset('css/base.min.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    @livewireStyles
    <style>
        body {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
        }

        body .form-control {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
        }

        .vertical-nav-menu li a.mm-active {
            color: #1FAF9E;
        }

        .btn-primary {
            color: #fff;
            background-color: #1FAF9E;
            border-color: #1FAF9E;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #1b9d8e;
            border-color: #1b9d8e
        }

        . .btn-primary:disabled {
            color: #fff;
            background-color: #1b9d8e;
            border-color: #1b9d8e;
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #1b9d8e;
            border-color: #1b9d8e
        }

    </style>

    @stack('css')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        {{ $slot }}
    </div>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
    <script src="{{ asset('js/scripts-init/app.js') }}"></script>
    <script src="{{ asset('js/scripts-init/demo.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts-init/toastr.js') }}"></script>
    <script src="{{ asset('js/scripts-init/sweet-alerts.js') }}"></script>
    @stack('js')
    <script>
        window.addEventListener('show-message', function(event) {
            let type = event.detail.type;
            let message = event.detail.message;
            toastr.options = {
                "progressBar": true,
            }
            toastr[type](message, {
                timeOut: 500
            });
        });
    </script>
</body>

</html>
