@extends('mazer_template.layouts.app')
@section('title', 'Tambah User')
@section('content')

<style>
    #show-password:hover {
        cursor: pointer;
        cursor: -webkit-grab;
        cursor: pointer;
    }

    #show-password-confirmation:hover {
        cursor: pointer;
        cursor: -webkit-grab;
        cursor: pointer;
    }

</style>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tambah User</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.users.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ route('admin.users.store') }}" id="form-create-user" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="name" style="font-weight: bold;">Nama <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="text" id="name" class="form-control" placeholder="..." name="name"
                                                    value="{{ old('name') ? old('name') : '' }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            @if($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="username" style="font-weight: bold;">Username <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="text" id="username" class="form-control" placeholder="..." name="username"
                                                    value="{{ old('username') ? old('username') : '' }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            @if($errors->has('username'))
                                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email" style="font-weight: bold;">Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="email" id="email" class="form-control" placeholder="..." name="email"
                                                    value="{{ old('email') ? old('email') : '' }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                            @if($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password" style="font-weight: bold;">Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="password" id="password" class="form-control" placeholder="..." name="password"
                                                    value="{{ old('password') ? old('password') : '' }}">

                                                <div class="form-control-icon">
                                                    <i id="show-password" class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                            @if($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password_confirmation" style="font-weight: bold;">Confirm Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="password" id="password_confirmation" class="form-control" placeholder="..." name="password_confirmation"
                                                    value="{{ old('password_confirmation') ? old('password_confirmation') : '' }}">
                                                <div class="form-control-icon">
                                                    <i id="show-password-confirmation" class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                            @if($errors->has('password_confirmation'))
                                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-primary btn-lg" type="submit" id="submit-create-user" onClick="changeToLoadingFormUser()">Submit</button>
            </div>
        </div>
    </section>
</div>

<script>
    function changeToLoadingFormUser() {
        var btn = document.getElementById('submit-create-user');
        btn.innerHTML = '<span class="spinner-border" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        // Simulating a delay of 2 seconds for demonstration purposes
        setTimeout(function () {
            // Enable the button and change the text back to "Login" after the delay
            btn.disabled = false;
            btn.innerHTML = 'Submit';

            // Submit the form
            submitFormUser();
        }, 2000);
    }

    function submitFormUser() {
        // Get the form element
        var form = document.getElementById('form-create-user');

        // Submit the form
        form.submit();
    }

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var passwordInput = document.getElementById('password');
        var showPasswordIcon = document.getElementById('show-password');

        showPasswordIcon.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordIcon.classList.remove('bi-lock');
                showPasswordIcon.classList.add('bi-unlock');
            } else {
                passwordInput.type = 'password';
                showPasswordIcon.classList.remove('bi-unlock');
                showPasswordIcon.classList.add('bi-lock');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        var passwordConfirmationInput = document.getElementById('password_confirmation');
        var showPasswordConfirmationIcon = document.getElementById('show-password-confirmation');

        showPasswordConfirmationIcon.addEventListener('click', function () {
            if (passwordConfirmationInput.type === 'password') {
                passwordConfirmationInput.type = 'text';
                showPasswordConfirmationIcon.classList.remove('bi-lock');
                showPasswordConfirmationIcon.classList.add('bi-unlock');
            } else {
                passwordConfirmationInput.type = 'password';
                showPasswordConfirmationIcon.classList.remove('bi-unlock');
                showPasswordConfirmationIcon.classList.add('bi-lock');
            }
        });
    });

</script>


@endsection
