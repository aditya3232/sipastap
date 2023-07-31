@extends('mazer_template.layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="page-heading">
    <h3>Dashboard Sistem Pelayanan Satu Atap Polresta Tidore</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="row">

            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                @php
                                    use Illuminate\Support\Facades\Storage;
                                    $path = Storage::url('images/profil/'.auth()->user()->foto_profil);
                                    $imageUrl = asset($path);
                                @endphp
                                <img src="{{ $imageUrl }}" onerror="this.src='/assets/images/samples/default.png'" alt="avatar-icon" />
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Selamat Datang</h5>
                                <h5 class="font-bold">{{ auth()->user()->name }}</h5>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-4">
                            <div class="name ms-4">
                                <h6 class="mb-1">
                                    <p id="current-time"></p>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h4>Profile Visit</h4> --}}
                    </div>
                    {{-- lol --}}
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href="{{ route('admin.formsidikjari.index') }}"><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Pendafatran Sidik Jari</h6>
                                            <h6 class="font-extrabold mb-0">{{ $total_permohonan_sidik_jari }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href="{{ route('admin.formsim.index') }}"><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Permohonan SIM</h6>
                                            <h6 class="font-extrabold mb-0">{{ $total_permohonan_sim }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href="{{ route('admin.formlaporankehilangan.index') }}"><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Laporan Kehilangan</h6>
                                            <h6 class="font-extrabold mb-0">{{ $total_laporan_kehilangan }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href="{{ route('admin.formlaporantindakkriminal.index') }}"><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Laporan Tindak Kriminal</h6>
                                            <h6 class="font-extrabold mb-0">{{ $total_tindak_kriminal }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href="{{ route('admin.formlaporanpengaduanmasyarakat.index') }}"><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Laporan Pengaduan Masyarakat</h6>
                                            <h6 class="font-extrabold mb-0">{{ $total_laporan_pengaduan_masyarakat }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <a href="{{ route('admin.formskck.index') }}"><i class="bi bi-archive-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total </h6>
                                            <h6 class="text-muted font-semibold">Permohonan SKCK</h6>
                                            <h6 class="font-extrabold mb-0">{{ $total_permohonan_skck }}</h6>
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

@endsection
