@extends('mazer_template.layouts_sipastap_home.app')
@section('title', 'Layanan Online Polresta Tidore')
@section('content')

<div class="page-heading">
    <h3>Layanan Online</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/sidik-jari.jpeg" alt="Card image cap" style="height: 20rem; width: 20rem;" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Pendaftaran Sidik Jari</h4>
                                <a type="button" class="btn btn-primary block mt-2" href="{{ route('sipastap.formsidikjari.create') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/sim.jpeg" alt="Card image cap" style="height: 20rem; width: 20rem;" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Permohonan SIM</h4>
                                <a type="button" class="btn btn-primary block mt-2" href="{{ route('sipastap.formsim.create') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/kehilangan.jpeg" alt="Card image cap" style="height: 20rem; width: 20rem;" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laporan Kehilangan</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('sipastap.formlaporankehilangan.create') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/tindak-kriminal.jpeg" alt="Card image cap" style="height: 20rem; width: 20rem;" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laporan Tindak Kriminal</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('sipastap.formlaporantindakkriminal.create') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/pengaduan_masyarakat.png" alt="Card image cap" style="height: 20rem; width: 20rem;" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Laporan Pengaduan Masyarakat</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('sipastap.formlaporanpengaduanmasyarakat.create') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="assets/images/samples/skck.png" alt="Card image cap" style="height: 20rem; width: 30rem;" />
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Permohonan SKCK</h4>
                                <a type="button" class="btn btn-primary block" href="{{ route('sipastap.formlaporantindakkriminal.create') }}">Input Data</a type="button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-lg-3">
            
        </div> --}}
    </section>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="cekSkck" tabindex="-1" aria-labelledby="cekSkckLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cekSkckLabel">Resi Skck</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan resi skck anda</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Cek Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="cekSp2hp" tabindex="-1" aria-labelledby="cekSp2hpLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cekSp2hpLabel">SP2HP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan nomor laporan</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <p class="text-subtitle text-muted mt-3">* Cara monitoring perkembangan SP2HP:</p>
                        <p class="text-subtitle text-muted">* Masukkan No.LP (laporan polisi) tanpa spasi</p>
                        <p class="text-subtitle text-muted">* Contoh:</p>
                        <p class="text-subtitle text-muted">* LP.B/00/I/2019/KAL-BAR/KTG</p>
                        <p class="text-subtitle text-muted">* LP.B/00/I/2019/KAL-BAR/KTG/SEK….</p>
                        <p class="text-subtitle text-muted">* Selanjutnya klik tombol cek data</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Cek Data</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
