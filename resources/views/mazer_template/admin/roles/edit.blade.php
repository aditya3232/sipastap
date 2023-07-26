@extends('mazer_template.layouts.app')
@section('title', 'Update Roles')
@section('content')

<style>
    .clickable-span {
        cursor: pointer;
    }

</style>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Assign Permission to Roles</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.roles.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ url('admin/roles/update/'.$role->id) }}" id="" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Nama Role</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="name">Nama Role</label>
                                            <input type="text" id="name" class="form-control" placeholder="Nama role" name="name" value="{{ old('name') ? old('name') : $role->name }}">
                                            @if($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Assign Permissions to Role: <span class="badge bg-primary mb-2">{{ $role->name }}</span></h4>

                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="permissions" style="font-weight: bold;">Permissions:</label>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12 col-12">

                                                <div class="d-inline-block">
                                                    @if($role->permissions->count() > 0)
                                                        @foreach($role->permissions as $item)
                                                            <form action="{{ url('admin/roles/deletepermissions/' . $role->id . '/' . $item->id) }}" method="POST"
                                                                class="delete-permission-form">
                                                                @method('DELETE')
                                                                @csrf
                                                                <!-- Rest of the form -->
                                                                <span class="badge bg-light-success mb-2 clickable-span delete-permission">{{ $item->name }}</span>
                                                            </form>
                                                        @endforeach
                                                    @else
                                                        <span class="badge bg-light-success">No permissions</span>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="permissions" style="font-weight: bold;">Permissions:</label>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <form class="form" action="{{ route('admin.roles.assignpermissions', $role->id) }}" id="" method="POST">
                                                    @csrf
                                                    <select class="form-control select2-permissions" name="permissions[]" multiple="multiple">
                                                    </select>
                                                    @if($errors->has('permissions'))
                                                        <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                                    @endif

                                                    <div class="d-grid gap-2 mt-4">
                                                        <button class="btn btn-primary" type="submit">Assign Permissions to This Role</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.delete-permission').click(function (e) {
            e.preventDefault(); // Prevents the default click behavior

            var form = $(this).closest('.delete-permission-form');
            var confirmation = confirm('Are you sure you want to delete this permission?');

            if (confirmation) {
                form.submit();
            }
        });
    });

</script>

@endsection
