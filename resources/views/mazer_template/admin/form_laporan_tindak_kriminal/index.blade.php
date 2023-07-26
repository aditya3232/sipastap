@extends('mazer_template.layouts.app')
@section('title', 'Daftar Formulir Laporan Tindak Kriminal')
@section('content')


<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Formulir Laporan Tindak Kriminal</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Laporan Tindak Kriminal`</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                {{-- <a href="" type="button" class="btn btn-primary"><i class="bi bi-plus-circle" style="font-size: 13px;"></i> Export Excel</a> --}}
                <div class="table-responsive mt-4 mb-4" style="width: 100%;">
                    <table class="table table-striped table-bordered" id="form_laporanTindakKriminal" style="border-collapse: collapse; width: 100%; table-layout: fixed;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">No</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Nama</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Nik</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Alamat</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">No Telepon</th>
                                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Email</th>
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
