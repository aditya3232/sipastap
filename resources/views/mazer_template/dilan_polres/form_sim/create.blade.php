@extends('mazer_template.layouts_dilanpolres.app')
@section('title', 'Formulir Permohonan Sim')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Formulir Permohonan Sim</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('dilanpolres.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ route('dilanpolres.formsim.store') }}" id="form-create-sim" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">1. Data Peserta Uji</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_permohonan" style="font-weight: bold;">Jenis Permohonan <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_permohonan" value="Baru"
                                                        {{ old('jenis_permohonan') == "Baru" ? 'checked' : '' }} id="jenis_permohonan">
                                                    <label class="form-check-label" for="jenis_permohonan">
                                                        Baru
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_permohonan" value="Perpanjang"
                                                        {{ old('jenis_permohonan') == "Perpanjang" ? 'checked' : '' }} id="jenis_permohonan">
                                                    <label class="form-check-label" for="jenis_permohonan">
                                                        Perpanjang
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_permohonan" value="Peningkatan Golongan"
                                                        {{ old('jenis_permohonan') == "Peningkatan Golongan" ? 'checked' : '' }}
                                                        id="jenis_permohonan">
                                                    <label class="form-check-label" for="jenis_permohonan">
                                                        Peningkatan Golongan
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_permohonan" value="Penurunan Golongan"
                                                        {{ old('jenis_permohonan') == "Penurunan Golongan" ? 'checked' : '' }}
                                                        id="jenis_permohonan">
                                                    <label class="form-check-label" for="jenis_permohonan">
                                                        Penurunan Golongan
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_permohonan" value="Penggantian (Hilang)"
                                                        {{ old('jenis_permohonan') == "Penggantian (Hilang)" ? 'checked' : '' }}
                                                        id="jenis_permohonan">
                                                    <label class="form-check-label" for="jenis_permohonan">
                                                        Penggantian (Hilang)
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_permohonan" value="Penggantian (Rusak)"
                                                        {{ old('jenis_permohonan') == "Penggantian (Rusak)" ? 'checked' : '' }}
                                                        id="jenis_permohonan">
                                                    <label class="form-check-label" for="jenis_permohonan">
                                                        Penggantian (Rusak)
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('jenis_permohonan'))
                                                <span class="text-danger">{{ $errors->first('jenis_permohonan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="gol_sim" style="font-weight: bold">Gol. SIM <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded mb-2">
                                                <label for="">1) SIM Perseorangan</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="A"
                                                        {{ old('gol_sim') == "A" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        A
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="B I"
                                                        {{ old('gol_sim') == "B I" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        B I
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="B II"
                                                        {{ old('gol_sim') == "B II" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        B II
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="C"
                                                        {{ old('gol_sim') == "C" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        C
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="D"
                                                        {{ old('gol_sim') == "D" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        D
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="D I"
                                                        {{ old('gol_sim') == "D I" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        D I
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="border p-2 rounded">
                                                <label for="">2) SIM Umum</label>
                                                <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="A UMUM"
                                                        {{ old('gol_sim') == "A UMUM" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        A UMUM
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="B I UMUM"
                                                        {{ old('gol_sim') == "B I UMUM" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        B I UMUM
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gol_sim" value="B II UMUM"
                                                        {{ old('gol_sim') == "B II UMUM" ? 'checked' : '' }} id="gol_sim">
                                                    <label class="form-check-label" for="gol_sim">
                                                        B II UMUM
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('gol_sim'))
                                                <span class="text-danger">{{ $errors->first('gol_sim') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email" style="font-weight: bold">Email</label>
                                            <input type="text" id="email" class="form-control" placeholder="..." name="email"
                                                value="{{ old('email') ? old('email') : '' }}">
                                            @if($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="polda_kedatangan" style="font-weight: bold">Polda Kedatangan <span class="text-danger">*</span></label>
                                            <input type="text" id="polda_kedatangan" class="form-control" placeholder="..." name="polda_kedatangan"
                                                value="{{ old('polda_kedatangan') ? old('polda_kedatangan') : '' }}">
                                            @if($errors->has('polda_kedatangan'))
                                                <span class="text-danger">{{ $errors->first('polda_kedatangan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="lokasi_kedatangan" style="font-weight: bold">Lokasi Kedatangan <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="lokasi_kedatangan" value="SATPAS"
                                                        {{ old('lokasi_kedatangan') == "SATPAS" ? 'checked' : '' }} id="lokasi_kedatangan">
                                                    <label class="form-check-label" for="lokasi_kedatangan">
                                                        SATPAS
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="lokasi_kedatangan" value="SIMLING"
                                                        {{ old('lokasi_kedatangan') == "SIMLING" ? 'checked' : '' }} id="lokasi_kedatangan">
                                                    <label class="form-check-label" for="lokasi_kedatangan">
                                                        SIMLING
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="lokasi_kedatangan" value="GERAI"
                                                        {{ old('lokasi_kedatangan') == "GERAI" ? 'checked' : '' }} id="lokasi_kedatangan">
                                                    <label class="form-check-label" for="lokasi_kedatangan">
                                                        GERAI
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="lokasi_kedatangan" value="LAINNYA:"
                                                        {{ old('lokasi_kedatangan') == "LAINNYA:" ? 'checked' : '' }}
                                                        id="lokasi_kedatangan">
                                                    <label class="form-check-label" for="lokasi_kedatangan">
                                                        LAINNYA:
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('lokasi_kedatangan'))
                                                <span class="text-danger">{{ $errors->first('lokasi_kedatangan') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">2. Data Pribadi</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama" style="font-weight: bold">Nama <span class="text-danger">*</span></label>
                                            <input type="text" id="nama" class="form-control" placeholder="..." name="nama" value="{{ old('nama') ? old('nama') : '' }}">
                                            @if($errors->has('nama'))
                                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_kecil_alias" style="font-weight: bold">Nama kecil / alias <span class="text-danger">*</span></label>
                                            <input type="text" id="nama_kecil_alias" class="form-control" placeholder="..." name="nama_kecil_alias"
                                                value="{{ old('nama_kecil_alias') ? old('nama_kecil_alias') : '' }}">
                                            @if($errors->has('nama_kecil_alias'))
                                                <span class="text-danger">{{ $errors->first('nama_kecil_alias') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin" style="font-weight: bold">Jenis kelamin <span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="jenis_kelamin">
                                                <option selected disabled value="">...</option>
                                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ?  'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ?  'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                            @if($errors->has('jenis_kelamin'))
                                                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir" style="font-weight: bold">Tempat lahir <span class="text-danger">*</span></label>
                                            <input type="text" id="tempat_lahir" class="form-control" placeholder="..." name="tempat_lahir"
                                                value="{{ old('tempat_lahir') ? old('tempat_lahir') : '' }}">
                                            @if($errors->has('tempat_lahir'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir" style="font-weight: bold">Tanggal lahir <span class="text-danger">*</span></label>
                                            <input type="date" id="tanggal_lahir" class="form-control" placeholder="..." name="tanggal_lahir"
                                                value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : '' }}">
                                            @if($errors->has('tanggal_lahir'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nik" style="font-weight: bold">Nik <span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="nik" class="form-control" placeholder="..." name="nik"
                                                value="{{ old('nik') ? old('nik') : '' }}">
                                            @if($errors->has('nik'))
                                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan" style="font-weight: bold">Pekerjaan <span class="text-danger">*</span></label>
                                            <input type="text" id="pekerjaan" class="form-control" placeholder="..." name="pekerjaan"
                                                value="{{ old('pekerjaan') ? old('pekerjaan') : '' }}">
                                            @if($errors->has('pekerjaan'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan" style="font-weight: bold">Kebangsaan <span class="text-danger">*</span></label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="..." name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_saat_ini" style="font-weight: bold">Alamat saat ini <span class="text-danger">*</span></label>
                                            <textarea name="alamat_saat_ini" id="alamat_saat_ini" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_saat_ini') ? old('alamat_saat_ini') : '' }}</textarea>
                                            @if($errors->has('alamat_saat_ini'))
                                                <span class="text-danger">{{ $errors->first('alamat_saat_ini') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_telp" style="font-weight: bold">No. telepon <span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp" class="form-control" placeholder="..." name="no_telp"
                                                value="{{ old('no_telp') ? old('no_telp') : '' }}">
                                            @if($errors->has('no_telp'))
                                                <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir" style="font-weight: bold">Pendidikan Terakhir <span class="text-danger">*</span></label>
                                            <input type="text" id="pendidikan_terakhir" class="form-control" placeholder="..." name="pendidikan_terakhir"
                                                value="{{ old('pendidikan_terakhir') ? old('pendidikan_terakhir') : '' }}">
                                            @if($errors->has('pendidikan_terakhir'))
                                                <span class="text-danger">{{ $errors->first('pendidikan_terakhir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="fotokopi_ktp" style="font-weight: bold">Fotokopi KTP <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="fotokopi_ktp" value="Ada"
                                                        {{ old('fotokopi_ktp') == "Ada" ? 'checked' : '' }} id="fotokopi_ktp">
                                                    <label class="form-check-label" for="fotokopi_ktp">
                                                        Ada
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="fotokopi_ktp" value="Tidak Ada"
                                                        {{ old('fotokopi_ktp') == "Tidak Ada" ? 'checked' : '' }} id="fotokopi_ktp">
                                                    <label class="form-check-label" for="fotokopi_ktp">
                                                        Tidak Ada
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('fotokopi_ktp'))
                                                <span class="text-danger">{{ $errors->first('fotokopi_ktp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="sertifikat_mengemudi" style="font-weight: bold">Sertifikat Mengemudi <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sertifikat_mengemudi" value="Ada"
                                                        {{ old('sertifikat_mengemudi') == "Ada" ? 'checked' : '' }} id="sertifikat_mengemudi">
                                                    <label class="form-check-label" for="sertifikat_mengemudi">
                                                        Ada
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sertifikat_mengemudi" value="Tidak Ada"
                                                        {{ old('sertifikat_mengemudi') == "Tidak Ada" ? 'checked' : '' }}
                                                        id="sertifikat_mengemudi">
                                                    <label class="form-check-label" for="sertifikat_mengemudi">
                                                        Tidak Ada
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('sertifikat_mengemudi'))
                                                <span class="text-danger">{{ $errors->first('sertifikat_mengemudi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="berkacamata" style="font-weight: bold">Berkaca Mata <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="berkacamata" value="Iya"
                                                        {{ old('berkacamata') == "Iya" ? 'checked' : '' }} id="berkacamata">
                                                    <label class="form-check-label" for="berkacamata">
                                                        Iya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="berkacamata" value="Tidak"
                                                        {{ old('berkacamata') == "Tidak" ? 'checked' : '' }} id="berkacamata">
                                                    <label class="form-check-label" for="berkacamata">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('berkacamata'))
                                                <span class="text-danger">{{ $errors->first('berkacamata') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="cacat_fisik" style="font-weight: bold">Cacat Fisik <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="cacat_fisik" value="Iya"
                                                        {{ old('cacat_fisik') == "Iya" ? 'checked' : '' }} id="cacat_fisik">
                                                    <label class="form-check-label" for="cacat_fisik">
                                                        Iya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="cacat_fisik" value="Tidak"
                                                        {{ old('cacat_fisik') == "Tidak" ? 'checked' : '' }} id="cacat_fisik">
                                                    <label class="form-check-label" for="cacat_fisik">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('cacat_fisik'))
                                                <span class="text-danger">{{ $errors->first('cacat_fisik') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">3. Hasil Ujian</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="hasil_ujian_teori" style="font-weight: bold;">Teori <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="hasil_ujian_teori" value="Lulus"
                                                        {{ old('hasil_ujian_teori') == "Lulus" ? 'checked' : '' }} id="hasil_ujian_teori">
                                                    <label class="form-check-label" for="hasil_ujian_teori">
                                                        Lulus
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="hasil_ujian_teori" value="Belum Lulus"
                                                        {{ old('hasil_ujian_teori') == "Belum Lulus" ? 'checked' : '' }}
                                                        id="hasil_ujian_teori">
                                                    <label class="form-check-label" for="hasil_ujian_teori">
                                                        Belum Lulus
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('hasil_ujian_teori'))
                                                <span class="text-danger">{{ $errors->first('hasil_ujian_teori') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="hasil_uji_keterampilan_pengemudi" style="font-weight: bold;">Uji Ketarampilan Pengemudi (Simulator) <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="hasil_uji_keterampilan_pengemudi" value="Lulus"
                                                        {{ old('hasil_uji_keterampilan_pengemudi') == "Lulus" ? 'checked' : '' }}
                                                        id="hasil_uji_keterampilan_pengemudi">
                                                    <label class="form-check-label" for="hasil_uji_keterampilan_pengemudi">
                                                        Lulus
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="hasil_uji_keterampilan_pengemudi" value="Belum Lulus"
                                                        {{ old('hasil_uji_keterampilan_pengemudi') == "Belum Lulus" ? 'checked' : '' }}
                                                        id="hasil_uji_keterampilan_pengemudi">
                                                    <label class="form-check-label" for="hasil_uji_keterampilan_pengemudi">
                                                        Belum Lulus
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('hasil_uji_keterampilan_pengemudi'))
                                                <span class="text-danger">{{ $errors->first('hasil_uji_keterampilan_pengemudi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="praktik_satu" style="font-weight: bold;">Praktik I <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="praktik_satu" value="Lulus"
                                                        {{ old('praktik_satu') == "Lulus" ? 'checked' : '' }} id="praktik_satu">
                                                    <label class="form-check-label" for="praktik_satu">
                                                        Lulus
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="praktik_satu" value="Belum Lulus"
                                                        {{ old('praktik_satu') == "Belum Lulus" ? 'checked' : '' }} id="praktik_satu">
                                                    <label class="form-check-label" for="praktik_satu">
                                                        Belum Lulus
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('praktik_satu'))
                                                <span class="text-danger">{{ $errors->first('praktik_satu') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="praktik_dua" style="font-weight: bold;">Praktik II <span class="text-danger">*</span></label>
                                            <br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="praktik_dua" value="Lulus"
                                                        {{ old('praktik_dua') == "Lulus" ? 'checked' : '' }} id="praktik_dua">
                                                    <label class="form-check-label" for="praktik_dua">
                                                        Lulus
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="praktik_dua" value="Belum Lulus"
                                                        {{ old('praktik_dua') == "Belum Lulus" ? 'checked' : '' }} id="praktik_dua">
                                                    <label class="form-check-label" for="praktik_dua">
                                                        Belum Lulus
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('praktik_dua'))
                                                <span class="text-danger">{{ $errors->first('praktik_dua') }}</span>
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
                <button class="btn btn-primary btn-lg" type="submit" id="submit-create-sim" onClick="changeToLoadingFormSim()">Submit</button>
            </div>
        </div>
    </section>
</div>

<script>
    function changeToLoadingFormSim() {
        var btn = document.getElementById('submit-create-sim');
        btn.innerHTML = '<span class="spinner-border" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        setTimeout(function () {
            btn.disabled = false;
            btn.innerHTML = 'Submit';

            submitFormSim();
        }, 2000);
    }

    function submitFormSim() {
        var form = document.getElementById('form-create-sim');

        form.submit();
    }

</script>

@endsection
