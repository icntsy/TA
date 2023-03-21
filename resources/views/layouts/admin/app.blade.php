<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel Klinik') }}</title>
    <link rel="stylesheet" href="{{ asset('css/base.min.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet" />
    @livewireStyles
    <style>
        body {
            font-family: 'Rubik', 'sans-serif';
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
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                @livewire('auth.logout')
            </div>
        </div>
        <div class="app-main">
            @include('layouts.admin.partials.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner pb-2">
                    @include('layouts.admin.partials.titlebar')
                    {{ $slot ?? '' }}
                    @yield('content')
                </div>
                @include('layouts.admin.partials.footer')
            </div>
        </div>
    </div>
    @yield('modal')
    @livewireScripts
    <!--CORE-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
    <script src="{{ asset('js/scripts-init/app.js') }}"></script>
    <script src="{{ asset('js/scripts-init/demo.js') }}"></script>
    <!--CHARTS-->

    <!--Apex Charts-->
    <script src="{{ asset('js/vendors/charts/apex-charts.js') }}"></script>

    <script src="{{ asset('js/scripts-init/charts/apex-charts.js') }}"></script>
    <script src="{{ asset('js/scripts-init/charts/apex-series.js') }}"></script>

    <!--Sparklines-->
    <script src="{{ asset('js/vendors/charts/charts-sparklines.js') }}"></script>
    <script src="{{ asset('js/scripts-init/charts/charts-sparklines.js') }}"></script>

    <!--Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="{{ asset('js/scripts-init/charts/chartsjs-utils.js') }}"></script>
    <script src="{{ asset('js/scripts-init/charts/chartjs.js') }}"></script>

    <!--FORMS-->

    <!--Clipboard-->
    <script src="{{ asset('js/vendors/form-components/clipboard.js') }}"></script>
    <script src="{{ asset('js/scripts-init/form-components/clipboard.js') }}"></script>

    <!--Datepickers-->
    <script src="{{ asset('js/vendors/form-components/datepicker.js') }}"></script>
    <script src="{{ asset('js/vendors/form-components/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/vendors/form-components/moment.js') }}"></script>
    <script src="{{ asset('js/scripts-init/form-components/datepicker.js') }}"></script>

    <!--Multiselect-->
    <script src="{{ asset('js/vendors/form-components/bootstrap-multiselect.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!--Form Validation-->
    <script src="{{ asset('js/vendors/form-components/form-validation.js') }}"></script>
    <script src="{{ asset('js/scripts-init/form-components/form-validation.js') }}"></script>

    <!--Form Wizard-->
    <script src="{{ asset('js/vendors/form-components/form-wizard.js') }}"></script>
    <script src="{{ asset('js/scripts-init/form-components/form-wizard.js') }}"></script>

    <!--Input Mask-->
    <script src="{{ asset('js/vendors/form-components/input-mask.js') }}"></script>
    <script src="{{ asset('js/scripts-init/form-components/input-mask.js') }}"></script>

    <!--RangeSlider-->
    <script src="{{ asset('js/vendors/form-components/wnumb.js') }}"></script>
    <script src="{{ asset('js/vendors/form-components/range-slider.js') }}"></script>
    <script src="{{ asset('js/scripts-init/form-components/range-slider.js') }}"></script>

    <!--Textarea Autosize-->
    <script src="{{ asset('js/vendors/form-components/textarea-autosize.js') }}"></script>
    <script src="{{ asset('js/scripts-init/form-components/textarea-autosize.js') }}"></script>

    <!--Toggle Switch -->
    <script src="{{ asset('js/vendors/form-components/toggle-switch.js') }}"></script>


    <!--COMPONENTS-->

    <!--BlockUI -->
    <script src="{{ asset('js/vendors/blockui.js') }}"></script>
    <script src="{{ asset('js/scripts-init/blockui.js') }}"></script>

    <!--Calendar -->
    <script src="{{ asset('js/vendors/calendar.js') }}"></script>
    <script src="{{ asset('js/scripts-init/calendar.js') }}"></script>

    <!--Slick Carousel -->
    <script src="{{ asset('js/vendors/carousel-slider.js') }}"></script>
    <script src="{{ asset('js/scripts-init/carousel-slider.js') }}"></script>



    <!--Perfect Scrollbar -->
    <script src="{{ asset('js/vendors/scrollbar.js') }}"></script>
    <script src="{{ asset('js/scripts-init/scrollbar.js') }}"></script>

    <!--Toastr-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts-init/toastr.js') }}"></script>

    <!--SweetAlert2
<script src="{{ asset('js/vendors/sweetalert2.all.js') }}"></script>
 -- SweetAlert 2 -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="{{ asset('js/scripts-init/sweet-alerts.js') }}"></script>

    <!--Tree View -->
    <script src="{{ asset('js/vendors/treeview.js') }}"></script>
    <script src="{{ asset('js/scripts-init/treeview.js') }}"></script>


    <!--TABLES -->
    <!--DataTables-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.19/js/dataTables.bootstrap4.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous">
    </script>

    <!--Bootstrap Tables-->
    <script src="{{ asset('js/vendors/tables.js') }}"></script>

    <!--Tables Init-->
    <script src="{{ asset('js/scripts-init/tables.js') }}"></script>
    @stack('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Livewire.on('showModal', (id) => {
                id = "#" + id;
                $(id).modal('show');
                console.log(id);
            });
        });
        window.addEventListener('show-message', function(event) {
            let type = event.detail.type;
            let message = event.detail.message;
            toastr.options = {
                "progressBar": true,
                "preventDuplicates": true
            }
            toastr[type](message, {
                timeOut: 500
            });
        })
        window.addEventListener('show-model', function(event) {
            let id = "#" + event.detail.id;
            $(id).modal('show');
        });
        window.addEventListener('close-model', function(event) {
            let id = "#" + event.detail.id;
            $(id).modal('hide');
        });
    </script>
</body>

</html>
