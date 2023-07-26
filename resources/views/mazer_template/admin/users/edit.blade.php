@extends('mazer_template.layouts.app')
@section('title', 'Update User')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update User Role</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.users.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ url('admin/users/update/'.$data->id) }}" id="form-update-user" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="name" style="font-weight: bold">Nama <span class="text-danger">*</span></label>
                                            <input type="text" id="name" class="form-control" placeholder="..." name="name" value="{{ old('name') ? old('name') : $data->name }}">
                                            @if($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="role_id" style="font-weight: bold;">Role <span class="text-danger">*</span></label>
                                                <select class="form-control select2-role" name="role_id">
                                                    <option selected disabled value="{{ $data->role->id }}">{{ $data->role->name }}</option>
                                                </select>
                                                @if($errors->has('role_id'))
                                                    <span class="text-danger">{{ $errors->first('role_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-primary btn-lg" type="submit" id="submit-update-user" onClick="changeToLoadingFormUpdateUser()">Submit</button>
            </div>
        </div>
    </section>
</div>

<script>
    function changeToLoadingFormUpdateUser() {
        var btn = document.getElementById('submit-update-user');
        btn.innerHTML = '<span class="spinner-border" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        // Simulating a delay of 2 seconds for demonstration purposes
        setTimeout(function () {
            // Enable the button and change the text back to "Login" after the delay
            btn.disabled = false;
            btn.innerHTML = 'Submit';

            // Submit the form
            submitFormUpdateUser();
        }, 2000);
    }

    function submitFormUpdateUser() {
        // Get the form element
        var form = document.getElementById('form-update-user');

        // Submit the form
        form.submit();
    }

</script>

@endsection
