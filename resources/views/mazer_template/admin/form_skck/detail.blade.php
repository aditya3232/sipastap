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
                <a type="button" class="btn btn-danger" id="cetak-pdf-form-skck-new" onClick="cetakPdfFormSkckNew()"><i class="bi bi-printer" style="font-size: 13px;"></i> Cetak Pdf</a>
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
            {{-- new --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bapak Sendiri:</h4>
                        <h4 class="card-title"><i>Father:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_nama_bapak" style="font-weight: bold">Nama</label> <span class="text-danger">*</span><br>
                                            <label for="skck_daftar_diris_nama_bapak" style="font-weight: bold"><u><i>Name</i></u></label>
                                            <input type="text" id="skck_daftar_diris_nama_bapak" class="form-control" placeholder="..." name="skck_daftar_diris_nama_bapak"
                                                value="{{ old('skck_daftar_diris_nama_bapak') ? old('skck_daftar_diris_nama_bapak') : $data->skck_daftar_diris_nama_bapak }}" disabled>
                                            @if($errors->has('skck_daftar_diris_nama_bapak'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_nama_bapak') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_umur_bapak" style="font-weight: bold;">Umur <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_umur_bapak" style="font-weight: bold;"><u><i>Age</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_umur_bapak" class="form-control" placeholder="..." name="skck_daftar_diris_umur_bapak"
                                                value="{{ old('skck_daftar_diris_umur_bapak') ? old('skck_daftar_diris_umur_bapak') : $data->skck_daftar_diris_umur_bapak }}" disabled>
                                            @if($errors->has('skck_daftar_diris_umur_bapak'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_umur_bapak') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_agama_bapak" style="font-weight: bold;">Agama <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_agama_bapak" style="font-weight: bold;"><u><i>Religion</i></u></label>
                                            <input type="text" id="skck_daftar_diris_agama_bapak" class="form-control" placeholder="..." name="skck_daftar_diris_agama_bapak"
                                                value="{{ old('skck_daftar_diris_agama_bapak') ? old('skck_daftar_diris_agama_bapak') : $data->skck_daftar_diris_agama_bapak }}" disabled>
                                            @if($errors->has('skck_daftar_diris_agama_bapak'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_agama_bapak') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_kebangsaan_bapak" style="font-weight: bold">Kebangsaan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_kebangsaan_bapak" style="font-weight: bold;"><u><i>Nationality</i></u></label>
                                            <input type="text" id="skck_daftar_diris_kebangsaan_bapak" class="form-control" placeholder="..." name="skck_daftar_diris_kebangsaan_bapak"
                                                value="{{ old('skck_daftar_diris_kebangsaan_bapak') ? old('skck_daftar_diris_kebangsaan_bapak') : $data->skck_daftar_diris_kebangsaan_bapak }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_kebangsaan_bapak'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_kebangsaan_bapak') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_pekerjaan_bapak" style="font-weight: bold;">Pekerjaan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_pekerjaan_bapak" style="font-weight: bold;"><u><i>Occupation</i></u></label>
                                            <input type="text" id="skck_daftar_diris_pekerjaan_bapak" class="form-control" placeholder="..." name="skck_daftar_diris_pekerjaan_bapak"
                                                value="{{ old('skck_daftar_diris_pekerjaan_bapak') ? old('skck_daftar_diris_pekerjaan_bapak') : $data->skck_daftar_diris_pekerjaan_bapak }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_pekerjaan_bapak'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_pekerjaan_bapak') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_alamat_bapak" style="font-weight: bold;">Alamat sekarang <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_alamat_bapak" style="font-weight: bold;"><u><i>Current Address</i></u></label>
                                            <textarea name="skck_daftar_diris_alamat_bapak" id="skck_daftar_diris_alamat_bapak" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_alamat_bapak') ? old('skck_daftar_diris_alamat_bapak') : $data->skck_daftar_diris_alamat_bapak }}</textarea>
                                            @if($errors->has('skck_daftar_diris_alamat_bapak'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_alamat_bapak') }}</span>
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
                        <h4 class="card-title">Ibu Sendiri:</h4>
                        <h4 class="card-title"><i>Mother:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_nama_ibu" style="font-weight: bold">Nama</label> <span class="text-danger">*</span><br>
                                            <label for="skck_daftar_diris_nama_ibu" style="font-weight: bold"><u><i>Name</i></u></label>
                                            <input type="text" id="skck_daftar_diris_nama_ibu" class="form-control" placeholder="..." name="skck_daftar_diris_nama_ibu"
                                                value="{{ old('skck_daftar_diris_nama_ibu') ? old('skck_daftar_diris_nama_ibu') : $data->skck_daftar_diris_nama_ibu }}" disabled>
                                            @if($errors->has('skck_daftar_diris_nama_ibu'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_nama_ibu') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_umur_ibu" style="font-weight: bold;">Umur <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_umur_ibu" style="font-weight: bold;"><u><i>Age</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_umur_ibu" class="form-control" placeholder="..." name="skck_daftar_diris_umur_ibu"
                                                value="{{ old('skck_daftar_diris_umur_ibu') ? old('skck_daftar_diris_umur_ibu') : $data->skck_daftar_diris_umur_ibu }}" disabled>
                                            @if($errors->has('skck_daftar_diris_umur_ibu'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_umur_ibu') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_agama_ibu" style="font-weight: bold;">Agama <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_agama_ibu" style="font-weight: bold;"><u><i>Religion</i></u></label>
                                            <input type="text" id="skck_daftar_diris_agama_ibu" class="form-control" placeholder="..." name="skck_daftar_diris_agama_ibu"
                                                value="{{ old('skck_daftar_diris_agama_ibu') ? old('skck_daftar_diris_agama_ibu') : $data->skck_daftar_diris_agama_ibu }}" disabled>
                                            @if($errors->has('skck_daftar_diris_agama_ibu'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_agama_ibu') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_kebangsaan_ibu" style="font-weight: bold">Kebangsaan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_kebangsaan_ibu" style="font-weight: bold;"><u><i>Nationality</i></u></label>
                                            <input type="text" id="skck_daftar_diris_kebangsaan_ibu" class="form-control" placeholder="..." name="skck_daftar_diris_kebangsaan_ibu"
                                                value="{{ old('skck_daftar_diris_kebangsaan_ibu') ? old('skck_daftar_diris_kebangsaan_ibu') : $data->skck_daftar_diris_kebangsaan_ibu }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_kebangsaan_ibu'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_kebangsaan_ibu') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_pekerjaan_ibu" style="font-weight: bold;">Pekerjaan <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_pekerjaan_ibu" style="font-weight: bold;"><u><i>Occupation</i></u></label>
                                            <input type="text" id="skck_daftar_diris_pekerjaan_ibu" class="form-control" placeholder="..." name="skck_daftar_diris_pekerjaan_ibu"
                                                value="{{ old('skck_daftar_diris_pekerjaan_ibu') ? old('skck_daftar_diris_pekerjaan_ibu') : $data->skck_daftar_diris_pekerjaan_ibu }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_pekerjaan_ibu'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_pekerjaan_ibu') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_alamat_ibu" style="font-weight: bold;">Alamat sekarang <span class="text-danger">*</span></label><br>
                                            <label for="skck_daftar_diris_alamat_ibu" style="font-weight: bold;"><u><i>Current Address</i></u></label>
                                            <textarea name="skck_daftar_diris_alamat_ibu" id="skck_daftar_diris_alamat_ibu" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_alamat_ibu') ? old('skck_daftar_diris_alamat_ibu') : $data->skck_daftar_diris_alamat_ibu }}</textarea>
                                            @if($errors->has('skck_daftar_diris_alamat_ibu'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_alamat_ibu') }}</span>
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
                        <h4 class="card-title">Saudara Kandung / Tiri:</h4>
                        <h4 class="card-title"><i>Siblings:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    {{-- make table input i want input can handle multiple value --}}
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Umur</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                        // show all data from compact data this data_skck_daftar_saudara_kandungs
                                                        $skck_daftar_saudara_kandungs_nama = [];
                                                        $skck_daftar_saudara_kandungs_umur = [];
                                                        $skck_daftar_saudara_kandungs_pekerjaan = [];
                                                        $skck_daftar_saudara_kandungs_alamat = [];

                                                        // loop all data from compact data this data_skck_daftar_saudara_kandungs
                                                        foreach($skck_daftar_saudara_kandungs as $data_skck_daftar_saudara_kandungs) {
                                                        // get data from table skck_daftar_saudara_kandungs
                                                        $skck_daftar_saudara_kandungs_nama[] = $data_skck_daftar_saudara_kandungs->skck_daftar_saudara_kandungs_nama;
                                                        $skck_daftar_saudara_kandungs_umur[] = $data_skck_daftar_saudara_kandungs->skck_daftar_saudara_kandungs_umur;
                                                        $skck_daftar_saudara_kandungs_pekerjaan[] = $data_skck_daftar_saudara_kandungs->skck_daftar_saudara_kandungs_pekerjaan;
                                                        $skck_daftar_saudara_kandungs_alamat[] = $data_skck_daftar_saudara_kandungs->skck_daftar_saudara_kandungs_alamat;
                                                        }

                                                        // convert array to string with separator ,
                                                        $skck_daftar_saudara_kandungs_nama = implode(',', $skck_daftar_saudara_kandungs_nama);
                                                        $skck_daftar_saudara_kandungs_umur = implode(',', $skck_daftar_saudara_kandungs_umur);
                                                        $skck_daftar_saudara_kandungs_pekerjaan = implode(',', $skck_daftar_saudara_kandungs_pekerjaan);
                                                        $skck_daftar_saudara_kandungs_alamat = implode(',', $skck_daftar_saudara_kandungs_alamat);

                                                        // convert string to array with separator ,
                                                        $skck_daftar_saudara_kandungs_nama = explode(',', $skck_daftar_saudara_kandungs_nama);
                                                        $skck_daftar_saudara_kandungs_umur = explode(',', $skck_daftar_saudara_kandungs_umur);
                                                        $skck_daftar_saudara_kandungs_pekerjaan = explode(',', $skck_daftar_saudara_kandungs_pekerjaan);
                                                        $skck_daftar_saudara_kandungs_alamat = explode(',', $skck_daftar_saudara_kandungs_alamat);

                                                        // count array
                                                        $count_skck_daftar_saudara_kandungs_nama = count($skck_daftar_saudara_kandungs_nama);
                                                        
                                                    ?>

                                                @for($i = 0; $i < count($skck_daftar_saudara_kandungs_nama); $i++)
                                                    @if($i == 0)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                    name="skck_daftar_saudara_kandungs_umur[]" value="{{ $skck_daftar_saudara_kandungs_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 1)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                    name="skck_daftar_saudara_kandungs_umur[]" value="{{ $skck_daftar_saudara_kandungs_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 2)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                    name="skck_daftar_saudara_kandungs_umur[]" value="{{ $skck_daftar_saudara_kandungs_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 3)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                    name="skck_daftar_saudara_kandungs_umur[]" value="{{ $skck_daftar_saudara_kandungs_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]"
                                                                    value="{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endfor
                                                {{-- show below, only the form is left, for example form d. because the previous user only filled out 3 forms --}}
                                                @if(count($skck_daftar_saudara_kandungs_nama) < 4)
                                                    @for($i = count($skck_daftar_saudara_kandungs_nama); $i < 4; $i++)
                                                        @if($i == 0)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_saudara_kandungs_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 1)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_saudara_kandungs_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 2)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_saudara_kandungs_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 3)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_nama" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_saudara_kandungs_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_saudara_kandungs_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_saudara_kandungs_pekerjaan" class="form-control" placeholder="..." name="skck_daftar_saudara_kandungs_pekerjaan[]" disabled>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_pekerjaan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_pekerjaan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_daftar_saudara_kandungs_alamat[]" id="skck_daftar_saudara_kandungs_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_daftar_saudara_kandungs_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_saudara_kandungs_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endfor
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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
                        <h4 class="card-title">Anak Kandung:</h4>
                        <h4 class="card-title"><i>Child:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    {{-- make table input i want input can handle multiple value --}}
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Umur</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $skck_daftar_anaks_nama = [];
                                                    $skck_daftar_anaks_umur = [];

                                                    foreach($skck_daftar_anaks as $data_skck_daftar_anaks) {
                                                        $skck_daftar_anaks_nama[] = $data_skck_daftar_anaks->skck_daftar_anaks_nama;
                                                        $skck_daftar_anaks_umur[] = $data_skck_daftar_anaks->skck_daftar_anaks_umur;
                                                    }

                                                    $skck_daftar_anaks_nama = implode(',', $skck_daftar_anaks_nama);
                                                    $skck_daftar_anaks_umur = implode(',', $skck_daftar_anaks_umur);

                                                    $skck_daftar_anaks_nama = explode(',', $skck_daftar_anaks_nama);
                                                    $skck_daftar_anaks_umur = explode(',', $skck_daftar_anaks_umur);

                                                    $count_skck_daftar_anaks_nama = count($skck_daftar_anaks_nama);
                                                        
                                                ?>

                                                @for($i = 0; $i < count($skck_daftar_anaks_nama); $i++)
                                                    @if($i == 0)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" value="{{ $skck_daftar_anaks_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..." name="skck_daftar_anaks_umur[]"
                                                                    value="{{ $skck_daftar_anaks_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 1)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" value="{{ $skck_daftar_anaks_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..." name="skck_daftar_anaks_umur[]"
                                                                    value="{{ $skck_daftar_anaks_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 2)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" value="{{ $skck_daftar_anaks_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..." name="skck_daftar_anaks_umur[]"
                                                                    value="{{ $skck_daftar_anaks_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 3)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" value="{{ $skck_daftar_anaks_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..." name="skck_daftar_anaks_umur[]"
                                                                    value="{{ $skck_daftar_anaks_umur[$i] }}" disabled>
                                                                @if($errors->has('skck_daftar_anaks_umur'))
                                                                    <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endfor
                                                {{-- show below, only the form is left, for example form d. because the previous user only filled out 3 forms --}}
                                                @if(count($skck_daftar_anaks_nama) < 4)
                                                    @for($i = count($skck_daftar_anaks_nama); $i < 4; $i++)
                                                        @if($i == 0)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_anaks_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 1)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_anaks_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 2)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_anaks_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 3)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_daftar_anaks_nama" class="form-control" placeholder="..." name="skck_daftar_anaks_nama[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_anaks_umur" class="form-control" placeholder="..."
                                                                        name="skck_daftar_anaks_umur[]" disabled>
                                                                    @if($errors->has('skck_daftar_anaks_umur'))
                                                                        <span class="text-danger">{{ $errors->first('skck_daftar_anaks_umur') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endfor
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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
                        <h4 class="card-title">Riwayat Sekolah:</h4>
                        <h4 class="card-title"><i>School History:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    {{-- make table input i want input can handle multiple value --}}
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Pendidikan</th>
                                                    <th>Tahun Lulus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                                        $skck_riwayat_sekolahs_nama_pendidikan = [];
                                                        $skck_riwayat_sekolahs_tahun_lulus = [];
                                                        
                                                        foreach($skck_riwayat_sekolahs as $data_skck_riwayat_sekolahs) {
                                                        $skck_riwayat_sekolahs_nama_pendidikan[] = $data_skck_riwayat_sekolahs->skck_riwayat_sekolahs_nama_pendidikan;
                                                        $skck_riwayat_sekolahs_tahun_lulus[] = $data_skck_riwayat_sekolahs->skck_riwayat_sekolahs_tahun_lulus;
                                                        }

                                                        $skck_riwayat_sekolahs_nama_pendidikan = implode(',', $skck_riwayat_sekolahs_nama_pendidikan);
                                                        $skck_riwayat_sekolahs_tahun_lulus = implode(',', $skck_riwayat_sekolahs_tahun_lulus);

                                                        $skck_riwayat_sekolahs_nama_pendidikan = explode(',', $skck_riwayat_sekolahs_nama_pendidikan);
                                                        $skck_riwayat_sekolahs_tahun_lulus = explode(',', $skck_riwayat_sekolahs_tahun_lulus);

                                                        $count_skck_riwayat_sekolahs_nama_pendidikan = count($skck_riwayat_sekolahs_nama_pendidikan);

                                                ?>

                                                @for($i = 0; $i < count($skck_riwayat_sekolahs_nama_pendidikan); $i++)
                                                    @if($i == 0)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]"
                                                                    value="{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                    name="skck_riwayat_sekolahs_tahun_lulus[]" value="{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 1)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]"
                                                                    value="{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                    name="skck_riwayat_sekolahs_tahun_lulus[]" value="{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 2)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]"
                                                                    value="{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                    name="skck_riwayat_sekolahs_tahun_lulus[]" value="{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 3)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]"
                                                                    value="{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                    name="skck_riwayat_sekolahs_tahun_lulus[]" value="{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 4)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]"
                                                                    value="{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                    name="skck_riwayat_sekolahs_tahun_lulus[]" value="{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}" disabled>
                                                                @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                    <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endfor
                                                {{-- show below, only the form is left, for example form d. because the previous user only filled out 3 forms --}}
                                                @if(count($skck_riwayat_sekolahs_nama_pendidikan) < 5)
                                                    @for($i = count($skck_riwayat_sekolahs_nama_pendidikan); $i < 5; $i++)
                                                        @if($i == 0)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                        name="skck_riwayat_sekolahs_tahun_lulus[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 1)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                        name="skck_riwayat_sekolahs_tahun_lulus[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 2)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                        name="skck_riwayat_sekolahs_tahun_lulus[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 3)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                        name="skck_riwayat_sekolahs_tahun_lulus[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 4)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_riwayat_sekolahs_nama_pendidikan" class="form-control" placeholder="..." name="skck_riwayat_sekolahs_nama_pendidikan[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_nama_pendidikan'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_nama_pendidikan') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_riwayat_sekolahs_tahun_lulus" class="form-control" placeholder="..."
                                                                        name="skck_riwayat_sekolahs_tahun_lulus[]" disabled>
                                                                    @if($errors->has('skck_riwayat_sekolahs_tahun_lulus'))
                                                                        <span class="text-danger">{{ $errors->first('skck_riwayat_sekolahs_tahun_lulus') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endfor
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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
                        <h4 class="card-title">Saudara yang Menjadi Tanggungan:</h4>
                        <h4 class="card-title"><i>Siblings who are dependents:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    {{-- make table input i want input can handle multiple value --}}
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                        $skck_saudara_yg_menjadi_tanggungans_nama = [];
                                                        $skck_saudara_yg_menjadi_tanggungans_alamat = [];
                                                        
                                                        foreach($skck_saudara_yg_menjadi_tanggungans as $data_skck_saudara_yg_menjadi_tanggungans) {
                                                        $skck_saudara_yg_menjadi_tanggungans_nama[] = $data_skck_saudara_yg_menjadi_tanggungans->skck_saudara_yg_menjadi_tanggungans_nama;
                                                        $skck_saudara_yg_menjadi_tanggungans_alamat[] = $data_skck_saudara_yg_menjadi_tanggungans->skck_saudara_yg_menjadi_tanggungans_alamat;
                                                        }

                                                        $skck_saudara_yg_menjadi_tanggungans_nama = implode(',', $skck_saudara_yg_menjadi_tanggungans_nama);
                                                        $skck_saudara_yg_menjadi_tanggungans_alamat = implode(',', $skck_saudara_yg_menjadi_tanggungans_alamat);

                                                        $skck_saudara_yg_menjadi_tanggungans_nama = explode(',', $skck_saudara_yg_menjadi_tanggungans_nama);
                                                        $skck_saudara_yg_menjadi_tanggungans_alamat = explode(',', $skck_saudara_yg_menjadi_tanggungans_alamat);
                                                ?>

                                                @for($i = 0; $i < count($skck_saudara_yg_menjadi_tanggungans_nama); $i++)
                                                    @if($i == 0)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]"
                                                                    value="{{ $skck_saudara_yg_menjadi_tanggungans_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_saudara_yg_menjadi_tanggungans_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 1)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]"
                                                                    value="{{ $skck_saudara_yg_menjadi_tanggungans_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_saudara_yg_menjadi_tanggungans_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 2)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]"
                                                                    value="{{ $skck_saudara_yg_menjadi_tanggungans_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_saudara_yg_menjadi_tanggungans_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @elseif($i == 3)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]"
                                                                    value="{{ $skck_saudara_yg_menjadi_tanggungans_nama[$i] }}" disabled>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                    disabled>{{ $skck_saudara_yg_menjadi_tanggungans_alamat[$i] }}</textarea>
                                                                @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                    <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endfor
                                                {{-- show below, only the form is left, for example form d. because the previous user only filled out 3 forms --}}
                                                @if(count($skck_saudara_yg_menjadi_tanggungans_nama) < 4)
                                                    @for($i = count($skck_saudara_yg_menjadi_tanggungans_nama); $i < 4; $i++)
                                                        @if($i == 0)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]" disabled>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 1)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]" disabled>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 2)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]" disabled>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @elseif($i == 3)
                                                            <tr>
                                                                <td>
                                                                    <input type="text" id="skck_saudara_yg_menjadi_tanggungans_nama" class="form-control" placeholder="..." name="skck_saudara_yg_menjadi_tanggungans_nama[]" disabled>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_nama'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_nama') }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <textarea name="skck_saudara_yg_menjadi_tanggungans_alamat[]" id="skck_saudara_yg_menjadi_tanggungans_alamat" cols="24" class="form-control" placeholder="..." rows="3"
                                                                        disabled></textarea>
                                                                    @if($errors->has('skck_saudara_yg_menjadi_tanggungans_alamat'))
                                                                        <span class="text-danger">{{ $errors->first('skck_saudara_yg_menjadi_tanggungans_alamat') }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endfor
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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
                        <h4 class="card-title">Perkara Pidana:</h4>
                        <h4 class="card-title"><i>Criminal Case:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana" style="font-weight: bold">Apakah saudara pernah tersangkut perkara pidana ?</label><br>
                                            <label for="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana" style="font-weight: bold"><u><i>Have you ever caught a criminal case ?</i></u></label>
                                            <textarea name="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana" id="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana') ? old('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana') : $data->skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana }}</textarea>
                                            @if($errors->has('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_dalam_perkara_pidana_apa" style="font-weight: bold">Dalam perkara apa ?</label><br>
                                            <label for="skck_daftar_diris_dalam_perkara_pidana_apa" style="font-weight: bold"><u><i>In any case ?</i></u></label>
                                            <textarea name="skck_daftar_diris_dalam_perkara_pidana_apa" id="skck_daftar_diris_dalam_perkara_pidana_apa" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_dalam_perkara_pidana_apa') ? old('skck_daftar_diris_dalam_perkara_pidana_apa') : $data->skck_daftar_diris_dalam_perkara_pidana_apa }}</textarea>
                                            @if($errors->has('skck_daftar_diris_dalam_perkara_pidana_apa'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_dalam_perkara_pidana_apa') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_bagaimana_putusan_hakim" style="font-weight: bold">Bagaimana putusannya dan vonis hakim ?</label><br>
                                            <label for="skck_daftar_diris_bagaimana_putusan_hakim" style="font-weight: bold"><u><i>How to judge the decision and verdict ?</i></u></label>
                                            <textarea name="skck_daftar_diris_bagaimana_putusan_hakim" id="skck_daftar_diris_bagaimana_putusan_hakim" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_bagaimana_putusan_hakim') ? old('skck_daftar_diris_bagaimana_putusan_hakim') : $data->skck_daftar_diris_bagaimana_putusan_hakim }}</textarea>
                                            @if($errors->has('skck_daftar_diris_bagaimana_putusan_hakim'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_bagaimana_putusan_hakim') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_apakah_sedang_dalam_proses_pidana" style="font-weight: bold">Apakah saudara sedang dalam proses perkara pidana ? Kasus apa ?</label><br>
                                            <label for="skck_daftar_diris_apakah_sedang_dalam_proses_pidana" style="font-weight: bold"><u><i>Are you currently in the process of a criminal case ? What kind of case ?</i></u></label>
                                            <textarea name="skck_daftar_diris_apakah_sedang_dalam_proses_pidana" id="skck_daftar_diris_apakah_sedang_dalam_proses_pidana" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_apakah_sedang_dalam_proses_pidana') ? old('skck_daftar_diris_apakah_sedang_dalam_proses_pidana') : $data->skck_daftar_diris_apakah_sedang_dalam_proses_pidana }}</textarea>
                                            @if($errors->has('skck_daftar_diris_apakah_sedang_dalam_proses_pidana'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_apakah_sedang_dalam_proses_pidana') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_sejauh_mana_proses_hukum_pidananya" style="font-weight: bold">Sampai sejauh mana proses hukumnya ?</label><br>
                                            <label for="skck_daftar_diris_sejauh_mana_proses_hukum_pidananya" style="font-weight: bold"><u><i>To what extent is the legal process ?</i></u></label>
                                            <textarea name="skck_daftar_diris_sejauh_mana_proses_hukum_pidananya" id="skck_daftar_diris_sejauh_mana_proses_hukum_pidananya" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_sejauh_mana_proses_hukum_pidananya') ? old('skck_daftar_diris_sejauh_mana_proses_hukum_pidananya') : $data->skck_daftar_diris_sejauh_mana_proses_hukum_pidananya }}</textarea>
                                            @if($errors->has('skck_daftar_diris_sejauh_mana_proses_hukum_pidananya'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_sejauh_mana_proses_hukum_pidananya') }}</span>
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
                        <h4 class="card-title">Pelanggaran:</h4>
                        <h4 class="card-title"><i>Violation:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran" style="font-weight: bold">Apakah saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial lainnya
                                                ?</label><br>
                                            <label for="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran" style="font-weight: bold"><u><i>Have you ever violated the law and social norms or other ?</i></u></label>
                                            <textarea name="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran" id="skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran" cols="24" class="form-control" placeholder="..."
                                                rows="3"
                                                disabled>{{ old('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran') ? old('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran') : $data->skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran }}</textarea>
                                            @if($errors->has('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_dalam_perkara_pelanggaran_apa" style="font-weight: bold">Pelanggaran hukum atau norma-norma sosial apa ?</label><br>
                                            <label for="skck_daftar_diris_dalam_perkara_pelanggaran_apa" style="font-weight: bold"><u><i>Violations of the laws or social norms of what ?</i></u></label>
                                            <textarea name="skck_daftar_diris_dalam_perkara_pelanggaran_apa" id="skck_daftar_diris_dalam_perkara_pelanggaran_apa" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_dalam_perkara_pelanggaran_apa') ? old('skck_daftar_diris_dalam_perkara_pelanggaran_apa') : $data->skck_daftar_diris_dalam_perkara_pelanggaran_apa }}</textarea>
                                            @if($errors->has('skck_daftar_diris_dalam_perkara_pelanggaran_apa'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_dalam_perkara_pelanggaran_apa') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya" style="font-weight: bold">Sejauh mana proses hukumnya ?</label><br>
                                            <label for="skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya" style="font-weight: bold"><u><i>To what extent is the process ?</i></u></label>
                                            <textarea name="skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya" id="skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya') ? old('skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya') : $data->skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya }}</textarea>
                                            @if($errors->has('skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya') }}</span>
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
                        <h4 class="card-title">Informasi Lain:</h4>
                        <h4 class="card-title"><i>Other Information:</i></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_riwayat_pekerjaan_lain" style="font-weight: bold">Riwayat pekerjaan Lainnya ?</label><br>
                                            <label for="skck_daftar_diris_riwayat_pekerjaan_lain" style="font-weight: bold"><u><i>Others Work experience ?</i></u></label>
                                            <textarea name="skck_daftar_diris_riwayat_pekerjaan_lain" id="skck_daftar_diris_riwayat_pekerjaan_lain" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_riwayat_pekerjaan_lain') ? old('skck_daftar_diris_riwayat_pekerjaan_lain') : $data->skck_daftar_diris_riwayat_pekerjaan_lain }}</textarea>
                                            @if($errors->has('skck_daftar_diris_riwayat_pekerjaan_lain'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_riwayat_pekerjaan_lain') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_negara_yg_pernah_dikunjungi" style="font-weight: bold">Negara-negara yang pernah dikunjungi (sebutkan tahun berapa, dalam rangka apa, dan negara apa yang dikunjungi)
                                                ?</label><br>
                                            <label for="skck_daftar_diris_negara_yg_pernah_dikunjungi" style="font-weight: bold"><u><i>Countries you have ever visited before ?</i></u></label>
                                            <textarea name="skck_daftar_diris_negara_yg_pernah_dikunjungi" id="skck_daftar_diris_negara_yg_pernah_dikunjungi" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_negara_yg_pernah_dikunjungi') ? old('skck_daftar_diris_negara_yg_pernah_dikunjungi') : $data->skck_daftar_diris_negara_yg_pernah_dikunjungi }}</textarea>
                                            @if($errors->has('skck_daftar_diris_negara_yg_pernah_dikunjungi'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_negara_yg_pernah_dikunjungi') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_hobi" style="font-weight: bold">Kesenangan / kegemaran / hobi ?</label><br>
                                            <label for="skck_daftar_diris_hobi" style="font-weight: bold"><u><i>Pleasure / pastimes / hobbies ?</i></u></label>
                                            <textarea name="skck_daftar_diris_hobi" id="skck_daftar_diris_hobi" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_hobi') ? old('skck_daftar_diris_hobi') : $data->skck_daftar_diris_hobi }}</textarea>
                                            @if($errors->has('skck_daftar_diris_hobi'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_hobi') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_no_telp_lain" style="font-weight: bold">No telepon lain yang mudah dihubungi ?</label><br>
                                            <label for="skck_daftar_diris_no_telp_lain" style="font-weight: bold"><u><i>Contacting address in case of emergency (phone call) ?</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_no_telp_lain" class="form-control" placeholder="..." name="skck_daftar_diris_no_telp_lain"
                                                value="{{ old('skck_daftar_diris_no_telp_lain') ? old('skck_daftar_diris_no_telp_lain') : $data->skck_daftar_diris_no_telp_lain }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_no_telp_lain'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_no_telp_lain') }}</span>
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
                        <h4 class="card-title">Sponsor (khusus orang asing / <i>Special foreigners</i> ):</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_disponsori_oleh" style="font-weight: bold">Disponsori oleh ?</label><br>
                                            <label for="skck_daftar_diris_disponsori_oleh" style="font-weight: bold"><u><i>Sponsored by ?</i></u></label>
                                            <textarea name="skck_daftar_diris_disponsori_oleh" id="skck_daftar_diris_disponsori_oleh" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_disponsori_oleh') ? old('skck_daftar_diris_disponsori_oleh') : $data->skck_daftar_diris_disponsori_oleh }}</textarea>
                                            @if($errors->has('skck_daftar_diris_disponsori_oleh'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_disponsori_oleh') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_alamat_sponsor" style="font-weight: bold">Alamat sponsor ?</label><br>
                                            <label for="skck_daftar_diris_alamat_sponsor" style="font-weight: bold"><u><i>Sponsor address ?</i></u></label>
                                            <textarea name="skck_daftar_diris_alamat_sponsor" id="skck_daftar_diris_alamat_sponsor" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_alamat_sponsor') ? old('skck_daftar_diris_alamat_sponsor') : $data->skck_daftar_diris_alamat_sponsor }}</textarea>
                                            @if($errors->has('skck_daftar_diris_alamat_sponsor'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_alamat_sponsor') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_no_telp_sponsor" style="font-weight: bold">No telepon ?</label><br>
                                            <label for="skck_daftar_diris_no_telp_sponsor" style="font-weight: bold"><u><i>No telp ?</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_no_telp_sponsor" class="form-control" placeholder="..." name="skck_daftar_diris_no_telp_sponsor"
                                                value="{{ old('skck_daftar_diris_no_telp_sponsor') ? old('skck_daftar_diris_no_telp_sponsor') : $data->skck_daftar_diris_no_telp_sponsor }}"
                                                disabled>
                                            @if($errors->has('skck_daftar_diris_no_telp_sponsor'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_no_telp_sponsor') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_fax" style="font-weight: bold">Fax ?</label><br>
                                            <label for="skck_daftar_diris_fax" style="font-weight: bold"><u><i>Fax ?</i></u></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="skck_daftar_diris_fax" class="form-control" placeholder="..." name="skck_daftar_diris_fax"
                                                value="{{ old('skck_daftar_diris_fax') ? old('skck_daftar_diris_fax') : $data->skck_daftar_diris_fax }}" disabled>
                                            @if($errors->has('skck_daftar_diris_fax'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_fax') }}</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 col-12">
                                    @foreach($skck_daftar_diris as $data)
                                        <div class="form-group">
                                            <label for="skck_daftar_diris_jenis_usaha" style="font-weight: bold">Jenis usaha ?</label><br>
                                            <label for="skck_daftar_diris_jenis_usaha" style="font-weight: bold"><u><i>Type of business ?</i></u></label>
                                            <textarea name="skck_daftar_diris_jenis_usaha" id="skck_daftar_diris_jenis_usaha" cols="24" class="form-control" placeholder="..." rows="3"
                                                disabled>{{ old('skck_daftar_diris_jenis_usaha') ? old('skck_daftar_diris_jenis_usaha') : $data->skck_daftar_diris_jenis_usaha }}</textarea>
                                            @if($errors->has('skck_daftar_diris_jenis_usaha'))
                                                <span class="text-danger">{{ $errors->first('skck_daftar_diris_jenis_usaha') }}</span>
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
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <p>Keterangan diatas saya buat dengan sebenarnya atas sumpah menurut kepercayaan saya, apabila
                                        dikemudian hari ternyata keterangan ini tidak benar maka saya sanggup dituntut berdasarkan hukum yang
                                        berlaku.
                                    </p>
                                    <p>
                                        <i>
                                            I made the above statement actually sworn according to
                                            my belief, if in the future this information turns out true then I could not be prosecuted under applicable laws.
                                        </i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</div>

@foreach($skck_daftar_diris as $data)
    <script>
        function cetakPdfFormSkckNew() {
            var btn = document.getElementById('cetak-pdf-form-skck-new');
            btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
            btn.disabled = true;

            setTimeout(function () {
                btn.disabled = false;
                btn.innerHTML = '<i class="bi bi-printer" style="font-size: 13px;"></i> Cetak Pdf';

                window.open('{{ route('admin.formskck.pdf',$data->skck_daftar_diris_id) }}', '_blank');
            }, 1000);
        }

    </script>
@endforeach

@endsection
