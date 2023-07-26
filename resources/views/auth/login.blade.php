@php
    use Illuminate\Support\Facades\Route;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>Login | Admin Layanan Polresta Tidore</title>
    <link rel="icon" type="image/png" href="{{ asset('img/bit-rounded.png') }}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/plugins.css" rel="stylesheet" />
    <link href="/assets/css/authentication/form-2.css" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" href="/assets/css/forms/switches.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script src="/plugins/feather-icons/dist/feather.js"></script>
    <script src={{ asset('assets/js/libs/jquery-3.1.1.min.js') }}></script>
    <link rel="stylesheet" href="/plugins/font-icons/fontawesome-6.2/css/all.min.css">
    <script src="/plugins/sweetalert2/js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="/plugins/sweetalert2/css/sweetalert2.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body class="form items-center justify-center w-screen h-screen  bg-gradient-to-r from-indigo-600 to-blue-400">
    @include('sweetalert::alert')
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        {{-- <h1 class="text-uppercase text-briview-login d-flex align-items-center justify-content-center">
                            <img src="/assets/images/logo/polri.png" class="bri-logo mr-2" alt="bit-company">
                            <div class="bit-login-title d-flex flex-column align-items-start">
                                <span>Polresta</span>
                                <span>Tidore</span>
                            </div>
                        </h1> --}}
                        <h1 class="text-uppercase text-briview-login align-items-center justify-content-center">
                            <div class="centered-logo">
                                <img src="/assets/images/logo/polri.png" class="bri-logo mr-2" alt="bit-company">
                            </div>
                            <div class="bit-login-title">
                                <h4>Polresta Tidore</h4>
                            </div>
                        </h1>
                        <form class="text-left" id="login-form" method="POST" action="{{ route('login') }}">
                            <!-- Session Status -->
                            @if(session('sukses'))
                                <div class="alert btn-success alert-dismissible show" role="alert">
                                    <strong>{{ session('sukses') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if(session('gagal'))
                                <div class="alert btn-danger alert-dismissible show" role="alert">
                                    <strong>{{ session('gagal') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if(session('wait'))
                                <div class="alert btn-success alert-dismissible show" role="alert">
                                    <strong>{{ session('wait') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @csrf
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">EMAIL</label>
                                    <i data-feather="user"></i>
                                    <input id="email" class="block mt-1 w-full form-control" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div id="password-field" class="field-wrapper input mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                    </div>
                                    <i data-feather="lock"></i>
                                    <input id="password" class="block mt-1 w-full form-control" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password"
                                        class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button id="btn-login" class="btn btn-primary" value="" onClick="changeToLoading()">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <p class="">Copyright {{ \Carbon\Carbon::now()->format('Y') }} - Polresta Tidore</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/bootstrap/js/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="/assets/js/authentication/form-2.js"></script>

    <script>
        function changeToLoading() {
            var btn = document.getElementById('btn-login');
            btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
            btn.disabled = true;

            // Simulating a delay of 2 seconds for demonstration purposes
            setTimeout(function () {
                // Enable the button and change the text back to "Login" after the delay
                btn.disabled = false;
                btn.innerHTML = 'Login';

                // Submit the form
                submitForm();
            }, 2000);
        }

        function submitForm() {
            // Get the form element
            var form = document.getElementById('login-form');

            // Submit the form
            form.submit();
        }

    </script>
    <script>
        setTimeout(function () {
            var sessionStatus = document.getElementById('btn-session-login');
            sessionStatus.setAttribute('hidden', true);
        }, 4000);

    </script>
</body>

</html>
