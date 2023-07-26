@extends('mazer_template.layouts.app')
@section('title', 'Update Profile')
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
                <h3>Update Profile</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ url('admin/profiles/update/') }}" id="form-update-profile" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="text-center">
                                            <!-- gambar diambil dari database (berdasarkan id)-->
                                            @php
                                                use Illuminate\Support\Facades\Storage;
                                                $path = Storage::url('images/profil/'.$data->foto_profil);
                                                $imageUrl = asset($path);
                                            @endphp
                                            <img src="{{ $imageUrl }}" onerror="this.src='/assets/images/samples/default.png'" class="rounded-circle img-preview" width="128" height="128" />
                                            {{-- <span>{{ $path }}</span> --}}
                                            <div class="mt-2">
                                                <!-- ini adalah tombol upload yg ketika diklik akan mengeluarkan input file -->
                                                <!-- disini tidak pakai button, tapi pakai span agar tidak terdeteksi oleh form action -->
                                                <span id="button_upload" class="btn btn-primary"><i class="fas fa-upload"></i> Update Avatar Baru</span>
                                                <input type="file" class="form-control" id="foto_profil" name="foto_profil" onchange="previewImg()" hidden>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <small>Agar tidak gagal upload, masukkan foto profil dengan ukuran tidak lebih dari 1MB didalam format jpg/jpeg/png.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="name" style="font-weight: bold">Nama <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <input type="text" id="name" class="form-control" placeholder="..." name="name" value="{{ old('name') ? old('name') : $data->name }}">
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
                                            <label for="password" style="font-weight: bold">New Password </label>
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
                                            <label for="password_confirmation" style="font-weight: bold">Confirm Password</label>
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
                <button class="btn btn-primary btn-lg" type="submit" id="submit-update-profile" onClick="changeToLoadingFormUpdateUser()">Submit</button>
            </div>
        </div>
    </section>
</div>

<script>
    function changeToLoadingFormUpdateUser() {
        var btn = document.getElementById('submit-update-profile');
        btn.innerHTML = '<span class="spinner-border" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        // Simulating a delay of 2 seconds for demonstration purposes
        setTimeout(function () {
            // Enable the button and change the text back to "Login" after the delay
            btn.disabled = false;
            btn.innerHTML = 'Submit';

            // Submit the form
            submitFormUpdateProfile();
        }, 2000);
    }

    function submitFormUpdateProfile() {
        // Get the form element
        var form = document.getElementById('form-update-profile');

        // Submit the form
        form.submit();
    }

</script>

<!-- script preview gambar -->
<script>
    function previewImg() {
        // ambil image-nya
        const imgPreview = document.querySelector('.img-preview');
        // ambil file yg diupload (di tag input wajib set id='foto_profil')
        const fileImage = new FileReader();
        fileImage.readAsDataURL(foto_profil.files[0]);
        // ganti preview-nya
        fileImage.onload = function (e) {
            imgPreview.src = e.target.result;
        }
    }

</script>

<!-- script agar ketika tag span diklik maka yg keluar adalah input file (yg terhidden) -->
<!-- script ini digunakan di tombol upload di user -->
<script>
    document.getElementById('button_upload').addEventListener('click', openDialog);

    function openDialog() {
        document.getElementById('foto_profil').click();
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
