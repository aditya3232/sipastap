@php
    use Illuminate\Support\Facades\Route;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Layanan Online Polres Polandia</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        
        

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        {{-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a> --}}
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in Admin Layanan Online Polres Malang</p>

                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-xl" placeholder="email" :value="old('email')" required autofocus autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" id="password" name="password"  class="form-control form-control-xl" placeholder="Password" required autocomplete="current-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="remember_me">
                            <label class="form-check-label text-gray-600" for="remember_me">
                                Tetap masuk
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>

                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Belum memiliki akun? <a href="{{ route('register') }}"
                                class="font-bold">Sign
                                up</a>.</p>
                        @if (Route::has('password.request'))
                        <p><a class="font-bold" href="{{ route('password.request') }}">Lupa password?</a>.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>


    </div>
</body>

</html>