@extends('mazer_template.layouts.app')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Form Pendaftaran Skck</h3>
            </div>
        </div>
    </div>

    @foreach($SkckDaftarDiriDetail as $item)
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Diri</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" class="form-control" placeholder="{{ $item->nama }}" name="nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control" placeholder="{{ $item->tempat_lahir }}" name="tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="tanggal_lahir" class="form-control" placeholder="{{ $item->tanggal_lahir }}" name="tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="jenis_kelamin" class="form-control" placeholder="{{ $item->jenis_kelamin }}" name="jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="text" id="nik" class="form-control" placeholder="{{ $item->nik }}" name="nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Pekerjaan">Pekerjaan</label>
                                            <input type="text" id="pekerjaan" class="form-control" placeholder="{{ $item->pekerjaan }}" name="pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan">Kebangsaan</label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="{{ $item->kebangsaan }}" name="kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="status_perkawinan" class="form-control" placeholder="{{ $item->status_perkawinan }}" name="status_perkawinan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" id="agama" class="form-control" placeholder="{{ $item->agama }}" name="agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3" placeholder="{{ $item->alamat }}" name="alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_telepon">No Telepon</label>
                                            <input type="number" id="no_telepon" class="form-control" placeholder="{{ $item->no_telepon }}" name="no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="{{ $item->email }}" name="email" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_passport">No Passport</label>
                                            <input type="number" id="no_passport" class="form-control" placeholder="{{ $item->no_passport }}" name="no_passport" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_kitas_kitap">No Kitas/ Kitap</label>
                                            <input type="number" id="no_kitas_kitap" class="form-control" placeholder="{{ $item->no_kitas_kitap }}" name="no_kitas_kitap" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keperluan_skck">Keperluan Skck</label>
                                            <textarea class="form-control" id="keperluan_skck" rows="3" placeholder="{{ $item->keperluan_skck }}" name="keperluan_skck" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_sd">Riwayat SD</label>
                                            <input type="text" id="riwayat_sd" class="form-control" placeholder="{{ $item->riwayat_sd }}" name="riwayat_sd" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_sd">Tanggal Lulus SD</label>
                                            <input type="text" id="tangggal_lulus_sd" class="form-control" placeholder="{{ $item->tangggal_lulus_sd }}" name="tangggal_lulus_sd" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_smp">Riwayat SMP</label>
                                            <input type="text" id="riwayat_smp" class="form-control" placeholder="{{ $item->riwayat_smp }}" name="riwayat_smp" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_smp">Tanggal Lulus SMP</label>
                                            <input type="text" id="tangggal_lulus_smp" class="form-control" placeholder="{{ $item->tangggal_lulus_smp }}" name="tangggal_lulus_smp" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_sma">Riwayat SMA</label>
                                            <input type="text" id="riwayat_sma" class="form-control" placeholder="{{ $item->riwayat_sma }}" name="riwayat_sma" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_sma">Tanggal Lulus SMA</label>
                                            <input type="text" id="tangggal_lulus_sma" class="form-control" placeholder="{{ $item->tangggal_lulus_sma }}" name="tangggal_lulus_sma" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_s1">Riwayat S1</label>
                                            <input type="text" id="riwayat_s1" class="form-control" placeholder="{{ $item->riwayat_s1 }}" name="riwayat_s1" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_s1">Tanggal Lulus S1</label>
                                            <input type="text" id="tangggal_lulus_s1" class="form-control" placeholder="{{ $item->tangggal_lulus_s1 }}" name="tangggal_lulus_s1" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_s2">Riwayat S2</label>
                                            <input type="text" id="riwayat_s2" class="form-control" placeholder="{{ $item->riwayat_s2 }}" name="riwayat_s2" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_s2">Tanggal Lulus S2</label>
                                            <input type="text" id="tangggal_lulus_s2" class="form-control" placeholder="{{ $item->tangggal_lulus_s2 }}" name="tangggal_lulus_s2" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="riwayat_s3">Riwayat S3</label>
                                            <input type="text" id="riwayat_s3" class="form-control" placeholder="{{ $item->riwayat_s3 }}" name="riwayat_s3" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tangggal_lulus_s3">Tanggal Lulus S3</label>
                                            <input type="text" id="tangggal_lulus_s3" class="form-control" placeholder="{{ $item->tangggal_lulus_s3 }}" name="tangggal_lulus_s3" readonly>
                                        </div>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hubungan Keluarga (Suami)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_nama">Nama</label>
                                            <input type="text" id="skck_daftar_suamis_nama" class="form-control" placeholder="{{ $item->skck_daftar_suamis_nama }}" name="skck_daftar_suamis_nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="skck_daftar_suamis_tempat_lahir" class="form-control" placeholder="{{ $item->skck_daftar_suamis_tempat_lahir }}" name="skck_daftar_suamis_tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="skck_daftar_suamis_tanggal_lahir" class="form-control" placeholder="{{ $item->skck_daftar_suamis_tanggal_lahir }}" name="skck_daftar_suamis_tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="skck_daftar_suamis_jenis_kelamin" class="form-control" placeholder="{{ $item->skck_daftar_suamis_jenis_kelamin }}" name="skck_daftar_suamis_jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_nik">Nik</label>
                                            <input type="number" id="skck_daftar_suamis_nik" class="form-control" placeholder="{{ $item->skck_daftar_suamis_nik }}" name="skck_daftar_suamis_nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_pekerjaan">Pekerjaan</label>
                                            <input type="text" id="skck_daftar_suamis_pekerjaan" class="form-control" placeholder="{{ $item->skck_daftar_suamis_pekerjaan }}" name="skck_daftar_suamis_pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_kebangsaan">Kebangsaan</label>
                                            <input type="text" id="skck_daftar_suamis_kebangsaan" class="form-control" placeholder="{{ $item->skck_daftar_suamis_kebangsaan }}" name="skck_daftar_suamis_kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="skck_daftar_suamis_status_perkawinan" class="form-control" placeholder="{{ $item->skck_daftar_suamis_status_perkawinan }}" name="skck_daftar_suamis_status_perkawinan"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_agama">Agama</label>
                                            <input type="text" id="skck_daftar_suamis_agama" class="form-control" placeholder="{{ $item->skck_daftar_suamis_agama }}" name="skck_daftar_suamis_agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_alamat">Alamat</label>
                                            <textarea class="form-control" id="skck_daftar_suamis_alamat" rows="3" placeholder="{{ $item->skck_daftar_suamis_alamat }}" name="skck_daftar_suamis_alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_no_telepon">No Telepon</label>
                                            <input type="number" id="skck_daftar_suamis_no_telepon" class="form-control" placeholder="{{ $item->skck_daftar_suamis_no_telepon }}" name="skck_daftar_suamis_no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_suamis_email">Email</label>
                                            <input type="email" id="skck_daftar_suamis_email" class="form-control" placeholder="{{ $item->skck_daftar_suamis_email }}" name="skck_daftar_suamis_email" readonly>
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
                            <h4 class="card-title">Hubungan Keluarga (Istri)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_nama">Nama</label>
                                            <input type="text" id="skck_daftar_istris_nama" class="form-control" placeholder="{{ $item->skck_daftar_istris_nama }}" name="skck_daftar_istris_nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="skck_daftar_istris_tempat_lahir" class="form-control" placeholder="{{ $item->skck_daftar_istris_tempat_lahir }}" name="skck_daftar_istris_tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="skck_daftar_istris_tanggal_lahir" class="form-control" placeholder="{{ $item->skck_daftar_istris_tanggal_lahir }}" name="skck_daftar_istris_tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="skck_daftar_istris_jenis_kelamin" class="form-control" placeholder="{{ $item->skck_daftar_istris_jenis_kelamin }}" name="skck_daftar_istris_jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_nik">Nik</label>
                                            <input type="number" id="skck_daftar_istris_nik" class="form-control" placeholder="{{ $item->skck_daftar_istris_nik }}" name="skck_daftar_istris_nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_pekerjaan">Pekerjaan</label>
                                            <input type="text" id="skck_daftar_istris_pekerjaan" class="form-control" placeholder="{{ $item->skck_daftar_istris_pekerjaan }}" name="skck_daftar_istris_pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_kebangsaan">Kebangsaan</label>
                                            <input type="text" id="skck_daftar_istris_kebangsaan" class="form-control" placeholder="{{ $item->skck_daftar_istris_kebangsaan }}" name="skck_daftar_istris_kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="skck_daftar_istris_status_perkawinan" class="form-control" placeholder="{{ $item->skck_daftar_istris_status_perkawinan }}" name="skck_daftar_istris_status_perkawinan"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_agama">Agama</label>
                                            <input type="text" id="skck_daftar_istris_agama" class="form-control" placeholder="{{ $item->skck_daftar_istris_agama }}" name="skck_daftar_istris_agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_alamat">Alamat</label>
                                            <textarea class="form-control" id="skck_daftar_istris_alamat" rows="3" placeholder="{{ $item->skck_daftar_istris_alamat }}" name="skck_daftar_istris_alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_no_telepon">No Telepon</label>
                                            <input type="number" id="skck_daftar_istris_no_telepon" class="form-control" placeholder="{{ $item->skck_daftar_istris_no_telepon }}" name="skck_daftar_istris_no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_istris_email">Email</label>
                                            <input type="email" id="skck_daftar_istris_email" class="form-control" placeholder="{{ $item->skck_daftar_istris_email }}" name="skck_daftar_istris_email" readonly>
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
                            <h4 class="card-title">Hubungan Keluarga (Bapak Kandung)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_nama">Nama</label>
                                            <input type="text" id="skck_daftar_bapaks_nama" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_nama }}" name="skck_daftar_bapaks_nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="skck_daftar_bapaks_tempat_lahir" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_tempat_lahir }}" name="skck_daftar_bapaks_tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="skck_daftar_bapaks_tanggal_lahir" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_tanggal_lahir }}" name="skck_daftar_bapaks_tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="skck_daftar_bapaks_jenis_kelamin" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_jenis_kelamin }}" name="skck_daftar_bapaks_jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_nik">Nik</label>
                                            <input type="number" id="skck_daftar_bapaks_nik" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_nik }}" name="skck_daftar_bapaks_nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_pekerjaan">Pekerjaan</label>
                                            <input type="text" id="skck_daftar_bapaks_pekerjaan" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_pekerjaan }}" name="skck_daftar_bapaks_pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_kebangsaan">Kebangsaan</label>
                                            <input type="text" id="skck_daftar_bapaks_kebangsaan" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_kebangsaan }}" name="skck_daftar_bapaks_kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="skck_daftar_bapaks_status_perkawinan" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_status_perkawinan }}" name="skck_daftar_bapaks_status_perkawinan"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_agama">Agama</label>
                                            <input type="text" id="skck_daftar_bapaks_agama" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_agama }}" name="skck_daftar_bapaks_agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_alamat">Alamat</label>
                                            <textarea class="form-control" id="skck_daftar_bapaks_alamat" rows="3" placeholder="{{ $item->skck_daftar_bapaks_alamat }}" name="skck_daftar_bapaks_alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_no_telepon">No Telepon</label>
                                            <input type="number" id="skck_daftar_bapaks_no_telepon" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_no_telepon }}" name="skck_daftar_bapaks_no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_bapaks_email">Email</label>
                                            <input type="email" id="skck_daftar_bapaks_email" class="form-control" placeholder="{{ $item->skck_daftar_bapaks_email }}" name="skck_daftar_bapaks_email" readonly>
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
                            <h4 class="card-title">Hubungan Keluarga (Ibu Kandung)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_nama">Nama</label>
                                            <input type="text" id="skck_daftar_ibus_nama" class="form-control" placeholder="{{ $item->skck_daftar_ibus_nama }}" name="skck_daftar_ibus_nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="skck_daftar_ibus_tempat_lahir" class="form-control" placeholder="{{ $item->skck_daftar_ibus_tempat_lahir }}" name="skck_daftar_ibus_tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="skck_daftar_ibus_tanggal_lahir" class="form-control" placeholder="{{ $item->skck_daftar_ibus_tanggal_lahir }}" name="skck_daftar_ibus_tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="skck_daftar_ibus_jenis_kelamin" class="form-control" placeholder="{{ $item->skck_daftar_ibus_jenis_kelamin }}" name="skck_daftar_ibus_jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_nik">Nik</label>
                                            <input type="number" id="skck_daftar_ibus_nik" class="form-control" placeholder="{{ $item->skck_daftar_ibus_nik }}" name="skck_daftar_ibus_nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_pekerjaan">Pekerjaan</label>
                                            <input type="text" id="skck_daftar_ibus_pekerjaan" class="form-control" placeholder="{{ $item->skck_daftar_ibus_pekerjaan }}" name="skck_daftar_ibus_pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_kebangsaan">Kebangsaan</label>
                                            <input type="text" id="skck_daftar_ibus_kebangsaan" class="form-control" placeholder="{{ $item->skck_daftar_ibus_kebangsaan }}" name="skck_daftar_ibus_kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="skck_daftar_ibus_status_perkawinan" class="form-control" placeholder="{{ $item->skck_daftar_ibus_status_perkawinan }}" name="skck_daftar_ibus_status_perkawinan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_agama">Agama</label>
                                            <input type="text" id="skck_daftar_ibus_agama" class="form-control" placeholder="{{ $item->skck_daftar_ibus_agama }}" name="skck_daftar_ibus_agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_alamat">Alamat</label>
                                            <textarea class="form-control" id="skck_daftar_ibus_alamat" rows="3" placeholder="{{ $item->skck_daftar_ibus_alamat }}" name="skck_daftar_ibus_alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_no_telepon">No Telepon</label>
                                            <input type="number" id="skck_daftar_ibus_no_telepon" class="form-control" placeholder="{{ $item->skck_daftar_ibus_no_telepon }}" name="skck_daftar_ibus_no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_ibus_email">Email</label>
                                            <input type="email" id="skck_daftar_ibus_email" class="form-control" placeholder="{{ $item->skck_daftar_ibus_email }}" name="skck_daftar_ibus_email" readonly>
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
                            <h4 class="card-title">Hubungan Keluarga (Saudara Kandung)</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_nama">Nama</label>
                                            <input type="text" id="skck_daftar_saudaras_nama" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_nama }}" name="skck_daftar_saudaras_nama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="skck_daftar_saudaras_tempat_lahir" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_tempat_lahir }}" name="skck_daftar_saudaras_tempat_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_tanggal_lahir">Tanggal Lahir</label>
                                            <input type="text" id="skck_daftar_saudaras_tanggal_lahir" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_tanggal_lahir }}" name="skck_daftar_saudaras_tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="skck_daftar_saudaras_jenis_kelamin" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_jenis_kelamin }}" name="skck_daftar_saudaras_jenis_kelamin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_nik">Nik</label>
                                            <input type="number" id="skck_daftar_saudaras_nik" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_nik }}" name="skck_daftar_saudaras_nik" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_pekerjaan">Pekerjaan</label>
                                            <input type="text" id="skck_daftar_saudaras_pekerjaan" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_pekerjaan }}" name="skck_daftar_saudaras_pekerjaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_kebangsaan">Kebangsaan</label>
                                            <input type="text" id="skck_daftar_saudaras_kebangsaan" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_kebangsaan }}" name="skck_daftar_saudaras_kebangsaan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_status_perkawinan">Status Perkawinan</label>
                                            <input type="text" id="skck_daftar_saudaras_status_perkawinan" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_status_perkawinan }}"
                                                name="skck_daftar_saudaras_status_perkawinan" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_agama">Agama</label>
                                            <input type="text" id="skck_daftar_saudaras_agama" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_agama }}" name="skck_daftar_saudaras_agama" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_alamat">Alamat</label>
                                            <textarea class="form-control" id="skck_daftar_saudaras_alamat" rows="3" placeholder="{{ $item->skck_daftar_saudaras_alamat }}" name="skck_daftar_saudaras_alamat" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_no_telepon">No Telepon</label>
                                            <input type="number" id="skck_daftar_saudaras_no_telepon" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_no_telepon }}" name="skck_daftar_saudaras_no_telepon" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_saudaras_email">Email</label>
                                            <input type="email" id="skck_daftar_saudaras_email" class="form-control" placeholder="{{ $item->skck_daftar_saudaras_email }}" name="skck_daftar_saudaras_email" readonly>
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
                            <h4 class="card-title">Perkara Pidana</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_pidanas_pidana_apa">Pidana Apa</label>
                                            <input type="text" id="skck_daftar_pidanas_pidana_apa" class="form-control" placeholder="{{ $item->skck_daftar_pidanas_pidana_apa }}" name="skck_daftar_pidanas_pidana_apa" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_pidanas_sejauhmana_proseshukumnya">Sejauh Mana Proses Hukumnya</label>
                                            <input type="text" id="skck_daftar_pidanas_sejauhmana_proseshukumnya" class="form-control" placeholder="{{ $item->skck_daftar_pidanas_sejauhmana_proseshukumnya }}"
                                                name="skck_daftar_pidanas_sejauhmana_proseshukumnya" readonly>
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
                            <h4 class="card-title">Pelanggaran</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_pelanggarans_pelanggaran_apa">Pelanggaran Apa</label>
                                            <input type="text" id="skck_daftar_pelanggarans_pelanggaran_apa" class="form-control" placeholder="{{ $item->skck_daftar_pelanggarans_pelanggaran_apa }}"
                                                name="skck_daftar_pelanggarans_pelanggaran_apa" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skck_daftar_pelanggarans_sejauhmana_proseshukumnya">Sejauh Mana Proses Hukumnya</label>
                                            <input type="text" id="skck_daftar_pelanggarans_sejauhmana_proseshukumnya" class="form-control" placeholder="{{ $item->skck_daftar_pelanggarans_sejauhmana_proseshukumnya }}"
                                                name="skck_daftar_pelanggarans_sejauhmana_proseshukumnya" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
</div>


<script>
    $(document).ready(function () {
        $('.select2').select2({
            theme: 'bootstrap'
        });
    });

</script>



@endsection
