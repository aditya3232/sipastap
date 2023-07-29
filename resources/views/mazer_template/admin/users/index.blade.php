@extends('mazer_template.layouts.app')
@section('title', 'Daftar Users')
@section('content')


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Users</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.users.create') }}" type="button" class="btn btn-primary"><i class="bi bi-plus-circle" style="font-size: 13px;"></i> Tambah Data</a>
                <div class="table-responsive mt-4 mb-4" style="width: 100%;">
                    <table class="table table-striped table-bordered" id="users" style="border-collapse: collapse; width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">No</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Nama</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Username</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Email</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Role</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </section>

    {{-- modal --}}
    <div class="modal fade" id="modalResetPassword" tabindex="-1" aria-labelledby="modalResetPasswordLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalResetPasswordLabel">Reset Password Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge bg-primary">
                        <h5 id="user_name_modal" class="text-white"></h5>
                    </span>
                </div>
                <form action="{{ url('admin/users/resetpassword') }}" method="post" id="formResetPassword">
                    @csrf
                    @method('post')
                    <div class="modal-footer">
                        <input type="text" name="password" value="secretPassword123" hidden />
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Batal</button>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-x-diamond-fill"></i> Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- end modal --}}

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Step 1: Include jQuery -->

<script>
    $(document).ready(function () {
        // Step 2: Add event listener to form submission
        $('#formResetPassword').on('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission

            var form = $(this);
            var action = form.attr('action');
            var formData = form.serialize(); // Get the form data as a query string

            // Step 3: Send the form data using AJAX
            $.ajax({
                type: 'POST',
                url: action,
                data: formData,
                success: function (response) {
                    // Handle the response here (e.g., show a success message)
                    console.log('Password reset successful!', response);
                    alert('Password reset successful!'); // Show an alert message
                    // Optionally, you can update the page content or close the modal.
                    // For example, to close the modal:
                    $('#modalResetPassword').modal('hide');
                },
                error: function (error) {
                    // Handle the error here (e.g., show an error message)
                    console.error('Error resetting password:', error);
                    alert('Password reset fail!');
                    $('#modalResetPassword').modal('hide');
                }
            });
        });

        $('#modalResetPassword').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var userId = button.data('user-id');
            var userName = button.data('user-name');
            var form = $('#formResetPassword');
            var action = form.attr('action');

            var tes = form.attr('action', action + '/' + userId)
            // Set the value of the input field for data-user-name
            $('#user_name_modal').text(userName);
        });
    });

</script>


@endsection
