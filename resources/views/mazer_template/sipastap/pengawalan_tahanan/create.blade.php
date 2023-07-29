@extends('mazer_template.layouts_sipastap.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pengawalan Tahanan</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pengawalan Tahanan</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Nama lengkap" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tempat Lahir</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Tempat lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tanggal Lahir</label>
                                            <input type="datetime-local" id="city-column" class="form-control" placeholder="Tanggal lahir" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Jenis Kelamin</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Jenis Kelamin</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nik</label>
                                            <input type="number" id="city-column" class="form-control" placeholder="Nik" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Pekerjaan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Pekerjaan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Kebangsaan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Kebangsaan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Status Perkawinan</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Status Perkawinan</option>
                                                <option value="1">Belum Kawin</option>
                                                <option value="2">Kawin</option>
                                                <option value="3">Cerai Hidup</option>
                                                <option value="4">Cerai Mati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Agama</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Agama</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="3">Katolik</option>
                                                <option value="4">Hindu</option>
                                                <option value="5">Budha</option>
                                                <option value="6">Konghucu</option>
                                                <option value="7">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Alamat</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Alamat" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">No Telepon</label>
                                            <input type="number" id="city-column" class="form-control" placeholder="No telepon" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Email</label>
                                            <input type="email" id="city-column" class="form-control" placeholder="Email" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Instansi</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Instansi" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Tahanan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Nama tahanan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Lokasi Tahanan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Lokasi tahanan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Jumlah Tahanan</label>
                                            <input type="datetime-local" id="city-column" class="form-control" placeholder="Jumlah tahanan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Rute Pengawalan</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Rute pengawalan" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Keterangan Singkat</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Keterangan Singkat" name="Nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Turut Serta</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Turut serta" name="Nama">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Submit</button>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>


<script>
    $(document).ready(function () {
        $('.select2').select2({
            theme: 'bootstrap'
        });
    });

</script>



@endsection
