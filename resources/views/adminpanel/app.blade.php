<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../../../assets_panel/" data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Panel</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets_panel/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets_panel/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_panel/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Page CSS -->
    @yield('css')

    <!-- Helpers -->
    <script src="{{ asset('assets_panel/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets_panel/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets_panel/js/config.js') }}"></script>
    @if (app()->getLocale() == 'ar')
        <script>
            var okk = "حسناََ";
        </script>
    @else
        <script>
            var okk = "Ok";
        </script>
    @endif
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('panel.index', app()->getLocale()) }}" class="app-brand-link" style="margin: auto">
                        <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="44" width="153"
                            alt="TradeLive AI">
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Page -->
                    <li class="menu-item active">
                        <a href="{{ route('panel.index', app()->getLocale()) }}" class="menu-link">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div>@lang('Dashboard')</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item d-none">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                            <div>@lang('Trading')</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('panel.account', app()->getLocale()) }}" class="menu-link">
                                    <div>@lang('Accounts')</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('panel.bank_card', app()->getLocale()) }}" class="menu-link">
                                    <div>@lang('My Cards')</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('panel.wallet', app()->getLocale()) }}" class="menu-link">
                                    <div>@lang('Wallet')</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('panel.banking', app()->getLocale()) }}" class="menu-link">
                                    <div>@lang('banking')</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('panel.verification', app()->getLocale()) }}" class="menu-link">
                                    <div>@lang('verification')</div>
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li class="menu-item">
                        <a data-href="{{ route('admin.verificationUser', app()->getLocale()) }}"
                            class="menu-link routeClick" id="clickNum01">
                            <i class="menu-icon far fa-address-book mb-2"></i>
                            <div>@lang('Doc Verification')</div>
                            <div class="badge bg-label-primary rounded-pill ms-auto num_users_ver">0</div>
                        </a>
                    </li>


                </ul>

            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">
                            <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                <i class="ti ti-sm"></i>
                            </a>
                        </div>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('assets_panel/img/avatars/1.png') }}" alt
                                            class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('assets_panel/img/avatars/1.png') }}" alt
                                                            class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                                    <small class="text-muted">
                                                        @lang('Admin')
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('panel.index', app()->getLocale()) }}">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('panel_dashboard', app()->getLocale()) }}">
                                            <i class="ti ti-settings me-2 ti-sm"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('panel.bank_card', app()->getLocale()) }}">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">1</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('signOut', app()->getLocale()) }}">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper" id="content">


                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->


                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    All copyrights reserved to © TradeLive AI
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>

                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets_panel/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets_panel/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets_panel/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets_panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets_panel/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets_panel/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ asset('assets_panel/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets_panel/js/main.js') }}"></script>

    <!-- Page JS -->
    <style>
        #template-customizer {
            display: none;
        }

        [dir=ltr] .mr-3,
        [dir=ltr] .mx-3 {
            margin-right: 3rem !important;
        }

        [dir=ltr] .mr-sm-2,
        [dir=ltr] .mx-sm-2 {
            margin-right: 1.5rem !important;
        }

        .tale {
            font-weight: 700;
        }

        [dir=ltr] .ml-2,
        [dir=ltr] .mx-2 {
            margin-left: 0.3rem !important;
        }

        select.form-control {
            padding: 0.5rem 0.875rem;
            appearance: auto;
        }

        .routeClick {
            cursor: pointer;
        }
    </style>
    <script>
        var spinner =
            `<div class="mt-5 pt-4" style="margin: auto"> <div class="sk-chase sk-primary"> <div class="sk-chase-dot"></div> <div class="sk-chase-dot"></div> <div class="sk-chase-dot"></div> <div class="sk-chase-dot"></div> <div class="sk-chase-dot"></div> <div class="sk-chase-dot"></div> </div> </div>`;
        $(document).ready(function() {
            $("body").on('click', '.routeClick', function() {

                if (!$(this).hasClass('noActive')) {
                    $(".menu-item").removeClass('active');
                    $(this).closest('.menu-item').addClass('active');
                }
                var url = $(this).data('href');
                $('#content').html(spinner);
                $.get(url, function(data) {
                    $('#content').hide().html(data).fadeIn(500);
                }); // get
            }); // body click

            getDataNumber();
            setInterval(() => {
                getDataNumber();
            }, 1000 * 60 * 5);
        }); // document ready

        function getDataNumber() {
            $.get("{{ route('admin.getDataNumbers', app()->getLocale()) }}", function(data) {
                $.each(data, function(indexInArray, valueOfElement) {
                    $("." + indexInArray).html(valueOfElement).hide().fadeIn(1500);
                });
            }); // get
        }



        // cancelProfile
        function cancelProfile(id) {
            Swal.fire({
                title: "Write the reason for cancellation",
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: "Confirm",
                showLoaderOnConfirm: true,
                preConfirm: (login) => {
                    return fetch(`/en/adminPanel/cancelProfile/${id}/${login}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#clickNum01').click();
                    getDataNumber();
                }
            })
        }

        //confirmProfile
        function confirmProfile(id) {

            Swal.fire({
                title: 'Do you want to confirm the profile?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Confirm`,
                denyButtonText: `Don't confirm`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#content').html(spinner);
                    $.get(`/en/adminPanel/confirmProfile/${id}`, function(data) {
                        $('#clickNum01').click();
                        getDataNumber();
                    }); // get
                } else if (result.isDenied) {

                }
            });

        }
    </script>
    @yield('js')

</body>

</html>
`
