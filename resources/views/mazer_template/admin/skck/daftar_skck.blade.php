@extends('mazer_template.layouts.app')
@section('title', 'Daftar Skck')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Skck Online</h3>
                {{-- <p class="text-subtitle text-muted">For user to check they list</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Skck</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            {{-- <div class="card-header">
                Daftar Skck Online
            </div> --}}
            <div class="card-body">
                {{-- <div class="table-responsive" style="width: 100%;">
                    <table class="table table-striped" id="skck">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Keperluan Skck</th>
                                <th>created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div> --}}
                <div class="table-responsive" style="width: 100%;">
                    <table class="table table-striped table-bordered" id="skck" style="border-collapse: collapse; width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">No</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Id</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Nama</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">No Telp</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 20%;">Alamat</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 20%;">Keperluan Skck</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">created</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>


@endsection
