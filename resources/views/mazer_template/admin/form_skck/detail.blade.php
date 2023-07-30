@extends('mazer_template.layouts.app')
@section('title', 'Detail Formulir Permohonan SKCK')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Formulir Permohonan SKCK</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.formskck.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
                <a type="button" class="btn btn-danger" id="cetak-pdf-form-skck" onClick="cetakPdfFormSkck()"><i class="bi bi-printer" style="font-size: 13px;"></i> Cetak Pdf</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="clearfix mb-0 mt-2 text-muted mx-5">
                        <div class="float-start">
                            <p></p>
                        </div>
                        <div class="float-end">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        @foreach($skck_daftar_diris as $data)
                                            <p class="font-weight-bold text-primary"><i class="bi bi-clock"></i> created at :
                                                {{ ''.\Carbon\Carbon::parse($data->skck_daftar_diris_created_at)->format('F j, Y, g:i a') }}
                                            </p>
                                        @endforeach
                                        @foreach($skck_daftar_diris as $data)
                                            @if($data->skck_daftar_diris_updated_at)
                                                <p class="font-weight-bold text-primary"><i class="bi bi-clock"></i> updated at:
                                                    {{ \Carbon\Carbon::parse($data->skck_daftar_diris_updated_at)->format('F j, Y, g:i a') }}
                                                </p>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title">Yang bertanda tangan dibawah ini:</h4>
                        <h4 class="card-title"><i>The undersigned is:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_nama" style="font-weight: bold">Nama <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_nama" style="font-weight: bold"><u><i>Name</i></u></label>
                                            <input type="text" id="skck_daftar_diris_nama" class="form-control" placeholder="..." name="skck_daftar_diris_nama"
                                                value="{{ old('skck_daftar_diris_nama') ? old('skck_daftar_diris_nama') : $data->skck_daftar_diris_nama }}" disabled>
                                            @if($errors->has('skck_daftar_diris_nama'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_nama') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_keperluan" style="font-weight: bold">Keperluan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_keperluan" style="font-weight: bold"><u><i>Purpose</i></u></label>
                                            <input type="text" id="skck_daftar_diris_keperluan" class="form-control" placeholder="..." name="skck_daftar_diris_keperluan"
                                                value="{{ old('skck_daftar_diris_keperluan') ? old('skck_daftar_diris_keperluan') : $data->skck_daftar_diris_keperluan }}" disabled>
                                            @if($errors->has('skck_daftar_diris_keperluan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_keperluan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_tempat_lahir" style="font-weight: bold">Tempat Lahir <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_tempat_lahir" style="font-weight: bold"><u><i>Place of Birth</i></u></label>
                                            <input type="text" id="skck_daftar_diris_tempat_lahir" class="form-control" placeholder="..." name="skck_daftar_diris_tempat_lahir"
                                                value="{{ old('skck_daftar_diris_tempat_lahir') ? old('skck_daftar_diris_tempat_lahir') : $data->skck_daftar_diris_tempat_lahir }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_tempat_lahir'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_tempat_lahir') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_tanggal_lahir" style="font-weight: bold;">Tanggal Lahir <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_tanggal_lahir" style="font-weight: bold;"><u><i>Date of Birth</i></u></label>
                                            <input type="date" id="skck_daftar_diris_tanggal_lahir" class="form-control" placeholder="..." name="skck_daftar_diris_tanggal_lahir"
                                                value="{{ old('skck_daftar_diris_tanggal_lahir') ? old('skck_daftar_diris_tanggal_lahir') : $data->skck_daftar_diris_tanggal_lahir }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_tanggal_lahir'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_tanggal_lahir') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_umur" style="font-weight: bold;">Umur <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_umur" style="font-weight: bold;"><u><i>Age</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_umur" class="form-control" placeholder="..." name="skck_daftar_diris_umur"
                                                value="{{ old('skck_daftar_diris_umur') ? old('skck_daftar_diris_umur') : $data->skck_daftar_diris_umur }}" disabled>
                                            @if($errors->has('skck_daftar_diris_umur'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_umur') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_kedudukan_dalam_keluarga" style="font-weight: bold">Kedudukan Dalam Keluarga <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_kedudukan_dalam_keluarga" style="font-weight: bold"><u><i>Position in the Family</i></u></label>
                                            <input type="text" id="skck_daftar_diris_kedudukan_dalam_keluarga" class="form-control" placeholder="..." name="skck_daftar_diris_kedudukan_dalam_keluarga"
                                                value="{{ old('skck_daftar_diris_kedudukan_dalam_keluarga') ? old('skck_daftar_diris_kedudukan_dalam_keluarga') : $data->skck_daftar_diris_kedudukan_dalam_keluarga }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_kedudukan_dalam_keluarga'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_kedudukan_dalam_keluarga') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_agama" style="font-weight: bold;">Agama <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_agama" style="font-weight: bold;"><u><i>Religion</i></u></label>
                                            <input type="text" id="skck_daftar_diris_agama" class="form-control" placeholder="..." name="skck_daftar_diris_agama"
                                                value="{{ old('skck_daftar_diris_agama') ? old('skck_daftar_diris_agama') : $data->skck_daftar_diris_agama }}" disabled>
                                            @if($errors->has('skck_daftar_diris_agama'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_agama') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_kebangsaan" style="font-weight: bold">Kebangsaan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_kebangsaan" style="font-weight: bold;"><u><i>Nationality</i></u></label>
                                            <input type="text" id="skck_daftar_diris_kebangsaan" class="form-control" placeholder="..." name="skck_daftar_diris_kebangsaan"
                                                value="{{ old('skck_daftar_diris_kebangsaan') ? old('skck_daftar_diris_kebangsaan') : $data->skck_daftar_diris_kebangsaan }}" disabled>
                                            @if($errors->has('skck_daftar_diris_kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_jenis_kelamin" style="font-weight: bold;">Jenis Kelamin <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_jenis_kelamin" style="font-weight: bold;"><u><i>Male / Female</i></u></label>
                                            <input type="text" id="skck_daftar_diris_jenis_kelamin" class="form-control" placeholder="..." name="skck_daftar_diris_jenis_kelamin"
                                                value="{{ old('skck_daftar_diris_jenis_kelamin') ? old('skck_daftar_diris_jenis_kelamin') : $data->skck_daftar_diris_jenis_kelamin }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_jenis_kelamin'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_jenis_kelamin') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_status_kawin" style="font-weight: bold;">Kawin/Tidak Kawin <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_status_kawin" style="font-weight: bold;"><u><i>Married / Not Married</i></u></label>
                                            <input type="text" id="skck_daftar_diris_status_kawin" class="form-control" placeholder="..." name="skck_daftar_diris_status_kawin"
                                                value="{{ old('skck_daftar_diris_status_kawin') ? old('skck_daftar_diris_status_kawin') : $data->skck_daftar_diris_status_kawin }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_status_kawin'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_status_kawin') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_pekerjaan" style="font-weight: bold;">Pekerjaan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_pekerjaan" style="font-weight: bold;"><u><i>Occupation</i></u></label>
                                            <input type="text" id="skck_daftar_diris_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_diris_pekerjaan"
                                                value="{{ old('skck_daftar_diris_pekerjaan') ? old('skck_daftar_diris_pekerjaan') : $data->skck_daftar_diris_pekerjaan }}" disabled>
                                            @if($errors->has('skck_daftar_diris_pekerjaan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_pekerjaan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_alamat_sekarang" style="font-weight: bold;">Alamat sekarang <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_alamat_sekarang" style="font-weight: bold;"><u><i>Current Address</i></u></label>
                                            <textarea name="skck_daftar_diris_alamat_sekarang" id="skck_daftar_diris_alamat_sekarang" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_alamat_sekarang') ? old('skck_daftar_diris_alamat_sekarang') : $data->skck_daftar_diris_alamat_sekarang }}</textarea>
                                            @if($errors->has('skck_daftar_diris_alamat_sekarang'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_alamat_sekarang') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_nik" style="font-weight: bold;">Nomor Kartu Penduduk <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_nik" style="font-weight: bold;"><u><i>Identity Card Number</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_nik" class="form-control" placeholder="..." name="skck_daftar_diris_nik"
                                                value="{{ old('skck_daftar_diris_nik') ? old('skck_daftar_diris_nik') : $data->skck_daftar_diris_nik }}" disabled>
                                            @if($errors->has('skck_daftar_diris_nik'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_nik') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_no_passport" style="font-weight: bold;">No. Paspor</label><br>
                                            <label for="skck_daftar_diris_no_passport" style="font-weight: bold;"><u><i>Passport Number</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_no_passport" class="form-control" placeholder="..." name="skck_daftar_diris_no_passport"
                                                value="{{ old('skck_daftar_diris_no_passport') ? old('skck_daftar_diris_no_passport') : $data->skck_daftar_diris_no_passport }}" disabled>
                                            @if($errors->has('skck_daftar_diris_no_passport'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_no_passport') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_no_kitas" style="font-weight: bold;">No. KITAS / KITAP</label><br>
                                            <label for="skck_daftar_diris_no_kitas" style="font-weight: bold;"><u><i>KITAS / KITAP Number</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_no_kitas" class="form-control" placeholder="..." name="skck_daftar_diris_no_kitas"
                                                value="{{ old('skck_daftar_diris_no_kitas') ? old('skck_daftar_diris_no_kitas') : $data->skck_daftar_diris_no_kitas }}" disabled>
                                            @if($errors->has('skck_daftar_diris_no_kitas'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_no_kitas') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_no_telp" style="font-weight: bold;">No. Telepon <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_no_telp" style="font-weight: bold;"><u><i>Phone Number</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_no_telp" class="form-control" placeholder="..." name="skck_daftar_diris_no_telp"
                                                value="{{ old('skck_daftar_diris_no_telp') ? old('skck_daftar_diris_no_telp') : $data->skck_daftar_diris_no_telp }}" disabled>
                                            @if($errors->has('skck_daftar_diris_no_telp'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_no_telp') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- new --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ciri-ciri badan:</h4>
                        <h4 class="card-title"><i>Characteristics of the body:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_rambut" style="font-weight: bold">Rambut <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_rambut" style="font-weight: bold"><u><i>Hair</i></u></label>
                                            <input type="text" id="skck_daftar_diris_rambut" class="form-control" placeholder="..." name="skck_daftar_diris_rambut"
                                                value="{{ old('skck_daftar_diris_rambut') ? old('skck_daftar_diris_rambut') : $data->skck_daftar_diris_rambut }}" disabled>
                                            @if($errors->has('skck_daftar_diris_rambut'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_rambut') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_muka" style="font-weight: bold">Muka <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_muka" style="font-weight: bold"><u><i>Face</i></u></label>
                                            <input type="text" id="skck_daftar_diris_muka" class="form-control" placeholder="..." name="skck_daftar_diris_muka"
                                                value="{{ old('skck_daftar_diris_muka') ? old('skck_daftar_diris_muka') : $data->skck_daftar_diris_muka }}" disabled>
                                            @if($errors->has('skck_daftar_diris_muka'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_muka') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_kulit" style="font-weight: bold">Kulit <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_kulit" style="font-weight: bold"><u><i>Skin</i></u></label>
                                            <input type="text" id="skck_daftar_diris_kulit" class="form-control" placeholder="..." name="skck_daftar_diris_kulit"
                                                value="{{ old('skck_daftar_diris_kulit') ? old('skck_daftar_diris_kulit') : $data->skck_daftar_diris_kulit }}" disabled>
                                            @if($errors->has('skck_daftar_diris_kulit'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_kulit') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_tinggi_badan" style="font-weight: bold;">Tinggi Badan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_tinggi_badan" style="font-weight: bold;"><u><i>Height</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_tinggi_badan" class="form-control" placeholder="..." name="skck_daftar_diris_tinggi_badan"
                                                value="{{ old('skck_daftar_diris_tinggi_badan') ? old('skck_daftar_diris_tinggi_badan') : $data->skck_daftar_diris_tinggi_badan }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_tinggi_badan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_tinggi_badan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_tanda_istimewa" style="font-weight: bold">Tanda Istimewa <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_tanda_istimewa" style="font-weight: bold"><u><i>Special Sign</i></u></label>
                                            <input type="text" id="skck_daftar_diris_tanda_istimewa" class="form-control" placeholder="..." name="skck_daftar_diris_tanda_istimewa"
                                                value="{{ old('skck_daftar_diris_tanda_istimewa') ? old('skck_daftar_diris_tanda_istimewa') : $data->skck_daftar_diris_tanda_istimewa }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_tanda_istimewa'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_tanda_istimewa') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_rumus_sidik_jari" style="font-weight: bold">Rumus Sidik Jari <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_rumus_sidik_jari" style="font-weight: bold"><u><i>Finger Print Formula</i></u></label>
                                            <input type="text" id="skck_daftar_diris_rumus_sidik_jari" class="form-control" placeholder="..." name="skck_daftar_diris_rumus_sidik_jari"
                                                value="{{ old('skck_daftar_diris_rumus_sidik_jari') ? old('skck_daftar_diris_rumus_sidik_jari') : $data->skck_daftar_diris_rumus_sidik_jari }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_rumus_sidik_jari'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_rumus_sidik_jari') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- new --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Istri / Suami:</h4>
                        <h4 class="card-title"><i>Wife / Husband:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_suami_atau_istri" style="font-weight: bold;">Suami / Istri</label><br>
                                            <label for="skck_daftar_diris_suami_atau_istri" style="font-weight: bold;"><i><u>Husband / Wife</u></i></label><br>
                                            <div class="border p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="skck_daftar_diris_suami_atau_istri" value="Suami" disabled
                                                        {{ $data->skck_daftar_diris_suami_atau_istri == "Suami" ? 'checked' : '' }}
                                                        id="skck_daftar_diris_suami_atau_istri">
                                                    <label class="form-check-label" for="skck_daftar_diris_suami_atau_istri">
                                                        Suami
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="skck_daftar_diris_suami_atau_istri" value="Istri" disabled
                                                        {{ $data->skck_daftar_diris_suami_atau_istri == "Istri" ? 'checked' : '' }}
                                                        id="skck_daftar_diris_suami_atau_istri">
                                                    <label class="form-check-label" for="skck_daftar_diris_suami_atau_istri">
                                                        Istri
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('skck_daftar_diris_suami_atau_istri'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_suami_atau_istri') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_nama_pasangan" style="font-weight: bold">Nama</label><br>
                                            <label for="skck_daftar_diris_nama_pasangan" style="font-weight: bold"><u><i>Name</i></u></label>
                                            <input type="text" id="skck_daftar_diris_nama_pasangan" class="form-control" placeholder="..." name="skck_daftar_diris_nama_pasangan"
                                                value="{{ old('skck_daftar_diris_nama_pasangan') ? old('skck_daftar_diris_nama_pasangan') : $data->skck_daftar_diris_nama_pasangan }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_nama_pasangan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_nama_pasangan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_umur_pasangan" style="font-weight: bold;">Umur</label><br>
                                            <label for="skck_daftar_diris_umur_pasangan" style="font-weight: bold;"><u><i>Age</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_umur_pasangan" class="form-control" placeholder="..." name="skck_daftar_diris_umur_pasangan"
                                                value="{{ old('skck_daftar_diris_umur_pasangan') ? old('skck_daftar_diris_umur_pasangan') : $data->skck_daftar_diris_umur_pasangan }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_umur_pasangan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_umur_pasangan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_agama_pasangan" style="font-weight: bold;">Agama</label><br>
                                            <label for="skck_daftar_diris_agama_pasangan" style="font-weight: bold;"><u><i>Religion</i></u></label>
                                            <input type="text" id="skck_daftar_diris_agama_pasangan" class="form-control" placeholder="..." name="skck_daftar_diris_agama_pasangan"
                                                value="{{ old('skck_daftar_diris_agama_pasangan') ? old('skck_daftar_diris_agama_pasangan') : $data->skck_daftar_diris_agama_pasangan }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_agama_pasangan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_agama_pasangan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_kebangsaan_pasangan" style="font-weight: bold">Kebangsaan</label><br>
                                            <label for="skck_daftar_diris_kebangsaan_pasangan" style="font-weight: bold;"><u><i>Nationality</i></u></label>
                                            <input type="text" id="skck_daftar_diris_kebangsaan_pasangan" class="form-control" placeholder="..." name="skck_daftar_diris_kebangsaan_pasangan"
                                                value="{{ old('skck_daftar_diris_kebangsaan_pasangan') ? old('skck_daftar_diris_kebangsaan_pasangan') : $data->skck_daftar_diris_kebangsaan_pasangan }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_kebangsaan_pasangan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_kebangsaan_pasangan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_pekerjaan_pasangan" style="font-weight: bold;">Pekerjaan</label><br>
                                            <label for="skck_daftar_diris_pekerjaan_pasangan" style="font-weight: bold;"><u><i>Occupation</i></u></label>
                                            <input type="text" id="skck_daftar_diris_pekerjaan_pasangan" class="form-control" placeholder="..." name="skck_daftar_diris_pekerjaan_pasangan"
                                                value="{{ old('skck_daftar_diris_pekerjaan_pasangan') ? old('skck_daftar_diris_pekerjaan_pasangan') : $data->skck_daftar_diris_pekerjaan_pasangan }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_pekerjaan_pasangan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_pekerjaan_pasangan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_alamat_pasangan" style="font-weight: bold;">Alamat sekarang</label><br>
                                            <label for="skck_daftar_diris_alamat_pasangan" style="font-weight: bold;"><u><i>Current Address</i></u></label>
                                            <textarea name="skck_daftar_diris_alamat_pasangan" id="skck_daftar_diris_alamat_pasangan" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_alamat_pasangan') ? old('skck_daftar_diris_alamat_pasangan') : $data->skck_daftar_diris_alamat_pasangan }}</textarea>
                                            @if($errors->has('skck_daftar_diris_alamat_pasangan'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_alamat_pasangan') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script>
    function cetakPdfFormSkck() {
        var btn = document.getElementById('cetak-pdf-form-skck');
        btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        setTimeout(function () {
            btn.disabled = false;
            btn.innerHTML = '<i class="bi bi-printer" style="font-size: 13px;"></i> Cetak Pdf';
            foreach($skck_daftar_diris as $data) {
                window.open('{{ route('admin.formskck.pdf',$data->skck_daftar_diris_id) }}', '_blank');
            }
        }, 1000);
    }

</script>

@endsection
