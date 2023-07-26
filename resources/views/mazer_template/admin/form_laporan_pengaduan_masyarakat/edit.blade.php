@extends('mazer_template.layouts.app')
@section('title', 'Update Formulir Laporan Pengaduan Masyarakat')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update Formulir Laporan Pengaduan Masyarakat</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.formlaporanpengaduanmasyarakat.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ url('admin/formlaporanpengaduanmasyarakat/update/'.$data->id) }}" id="form-update-pengaduan-masyarakat" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">1. Data Yang Melaporkan</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_yang_melaporkan" style="font-weight: bold">Nama Pelapor<span class="text-danger">*</span></label>
                                            <input type="text" id="nama_yang_melaporkan" class="form-control" placeholder="..." name="nama_yang_melaporkan"
                                                value="{{ old('nama_yang_melaporkan') ? old('nama_yang_melaporkan') : $data->nama_yang_melaporkan }}">
                                            @if($errors->has('nama_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('nama_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nik_yang_melaporkan" style="font-weight: bold">Nik Pelapor<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="nik_yang_melaporkan" class="form-control" placeholder="..." name="nik_yang_melaporkan"
                                                value="{{ old('nik_yang_melaporkan') ? old('nik_yang_melaporkan') : $data->nik_yang_melaporkan }}">
                                            @if($errors->has('nik_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('nik_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir_yang_melaporkan" style="font-weight: bold">Tempat Lahir Pelapor<span class="text-danger">*</span></label>
                                            <input type="text" id="tempat_lahir_yang_melaporkan" class="form-control" placeholder="..." name="tempat_lahir_yang_melaporkan"
                                                value="{{ old('tempat_lahir_yang_melaporkan') ? old('tempat_lahir_yang_melaporkan') : $data->tempat_lahir_yang_melaporkan }}">
                                            @if($errors->has('tempat_lahir_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_yang_melaporkan" style="font-weight: bold">Tanggal Lahir Pelapor<span class="text-danger">*</span></label>
                                            <input type="date" id="tanggal_lahir_yang_melaporkan" class="form-control" placeholder="..." name="tanggal_lahir_yang_melaporkan"
                                                value="{{ old('tanggal_lahir_yang_melaporkan') ? old('tanggal_lahir_yang_melaporkan') : $data->tanggal_lahir_yang_melaporkan }}">
                                            @if($errors->has('tanggal_lahir_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="umur_yang_melaporkan" style="font-weight: bold">Umur Pelapor<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="umur_yang_melaporkan" class="form-control" placeholder="..." name="umur_yang_melaporkan"
                                                value="{{ old('umur_yang_melaporkan') ? old('umur_yang_melaporkan') : $data->umur_yang_melaporkan }}">
                                            @if($errors->has('umur_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('umur_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin_yang_melaporkan" style="font-weight: bold">Jenis kelamin Pelapor<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="jenis_kelamin_yang_melaporkan">
                                                <option selected disabled value="">...</option>
                                                <option value="Laki-laki"
                                                    {{ old('jenis_kelamin_yang_melaporkan') == 'Laki-laki' || $data->jenis_kelamin_yang_melaporkan == 'Laki-laki'  ?  'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ old('jenis_kelamin_yang_melaporkan') == 'Perempuan' || $data->jenis_kelamin_yang_melaporkan == 'Perempuan' ?  'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                            @if($errors->has('jenis_kelamin_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('jenis_kelamin_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_yang_melaporkan" style="font-weight: bold">Pekerjaan Pelapor<span class="text-danger">*</span></label>
                                            <input type="text" id="pekerjaan_yang_melaporkan" class="form-control" placeholder="..." name="pekerjaan_yang_melaporkan"
                                                value="{{ old('pekerjaan_yang_melaporkan') ? old('pekerjaan_yang_melaporkan') : $data->pekerjaan_yang_melaporkan }}">
                                            @if($errors->has('pekerjaan_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_yang_melaporkan" style="font-weight: bold">Alamat Pelapor<span class="text-danger">*</span></label>
                                            <textarea name="alamat_yang_melaporkan" id="alamat_yang_melaporkan" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_yang_melaporkan') ? old('alamat_yang_melaporkan') : $data->alamat_yang_melaporkan }}</textarea>
                                            @if($errors->has('alamat_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('alamat_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_telp_yang_melaporkan" style="font-weight: bold">No Telepon Pelapor<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp_yang_melaporkan" class="form-control" placeholder="..." name="no_telp_yang_melaporkan"
                                                value="{{ old('no_telp_yang_melaporkan') ? old('no_telp_yang_melaporkan') : $data->no_telp_yang_melaporkan }}">
                                            @if($errors->has('no_telp_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('no_telp_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email_yang_melaporkan" style="font-weight: bold">Email Pelapor</label>
                                            <input type="email" id="email_yang_melaporkan" class="form-control" placeholder="..." name="email_yang_melaporkan"
                                                value="{{ old('email_yang_melaporkan') ? old('email_yang_melaporkan') : $data->email_yang_melaporkan }}">
                                            @if($errors->has('email_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('email_yang_melaporkan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama_yang_melaporkan" style="font-weight: bold;">Agama Pelapor<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama_yang_melaporkan">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam"
                                                    {{ old('agama_yang_melaporkan') == 'Islam' || $data->agama_yang_melaporkan == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan"
                                                    {{ old('agama_yang_melaporkan') == 'Protestan' || $data->agama_yang_melaporkan == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik"
                                                    {{ old('agama_yang_melaporkan') == 'Katolik' ||  $data->agama_yang_melaporkan == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu"
                                                    {{ old('agama_yang_melaporkan') == 'Hindu' || $data->agama_yang_melaporkan == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha"
                                                    {{ old('agama_yang_melaporkan') == 'Buddha' || $data->agama_yang_melaporkan == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu"
                                                    {{ old('agama_yang_melaporkan') == 'Khonghucu' || $data->agama_yang_melaporkan == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama_yang_melaporkan'))
                                                <span class="text-danger">{{ $errors->first('agama_yang_melaporkan') }}</span>
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
                            <h4 class="card-title">2. Data Peristiwa yang Dilaporkan</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="waktu_kejadian" style="font-weight: bold">Waktu Kejadian <span class="text-danger">*</span></label>
                                            <input type="datetime-local" id="waktu_kejadian" class="form-control" placeholder="..." name="waktu_kejadian"
                                                value="{{ old('waktu_kejadian') ? old('waktu_kejadian') : $data->waktu_kejadian }}">
                                            @if($errors->has('waktu_kejadian'))
                                                <span class="text-danger">{{ $errors->first('waktu_kejadian') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_kejadian" style="font-weight: bold">Tempat Kejadian <span class="text-danger">*</span></label>
                                            <input type="text" id="tempat_kejadian" class="form-control" placeholder="..." name="tempat_kejadian"
                                                value="{{ old('tempat_kejadian') ? old('tempat_kejadian') : $data->tempat_kejadian }}">
                                            @if($errors->has('tempat_kejadian'))
                                                <span class="text-danger">{{ $errors->first('tempat_kejadian') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="apa_yang_terjadi" style="font-weight: bold">Apa yang Terjadi <span class="text-danger">*</span></label>
                                            <input type="text" id="apa_yang_terjadi" class="form-control" placeholder="..." name="apa_yang_terjadi"
                                                value="{{ old('apa_yang_terjadi') ? old('apa_yang_terjadi') : $data->apa_yang_terjadi }}">
                                            @if($errors->has('apa_yang_terjadi'))
                                                <span class="text-danger">{{ $errors->first('apa_yang_terjadi') }}</span>
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
                            <h4 class="card-title">3. Data Terlapor</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_terlapor" style="font-weight: bold">Nama Terlapor<span class="text-danger">*</span></label>
                                            <input type="text" id="nama_terlapor" class="form-control" placeholder="..." name="nama_terlapor"
                                                value="{{ old('nama_terlapor') ? old('nama_terlapor') : $data->nama_terlapor }}">
                                            @if($errors->has('nama_terlapor'))
                                                <span class="text-danger">{{ $errors->first('nama_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir_terlapor" style="font-weight: bold">Tempat Lahir Terlapor<span class="text-danger">*</span></label>
                                            <input type="text" id="tempat_lahir_terlapor" class="form-control" placeholder="..." name="tempat_lahir_terlapor"
                                                value="{{ old('tempat_lahir_terlapor') ? old('tempat_lahir_terlapor') : $data->tempat_lahir_terlapor }}">
                                            @if($errors->has('tempat_lahir_terlapor'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_terlapor" style="font-weight: bold">Tanggal Lahir Terlapor<span class="text-danger">*</span></label>
                                            <input type="date" id="tanggal_lahir_terlapor" class="form-control" placeholder="..." name="tanggal_lahir_terlapor"
                                                value="{{ old('tanggal_lahir_terlapor') ? old('tanggal_lahir_terlapor') : $data->tanggal_lahir_terlapor }}">
                                            @if($errors->has('tanggal_lahir_terlapor'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="umur_terlapor" style="font-weight: bold">Umur Terlapor<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="umur_terlapor" class="form-control" placeholder="..." name="umur_terlapor"
                                                value="{{ old('umur_terlapor') ? old('umur_terlapor') : $data->umur_terlapor }}">
                                            @if($errors->has('umur_terlapor'))
                                                <span class="text-danger">{{ $errors->first('umur_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin_terlapor" style="font-weight: bold">Jenis kelamin Terlapor<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="jenis_kelamin_terlapor">
                                                <option selected disabled value="">...</option>
                                                <option value="Laki-laki"
                                                    {{ old('jenis_kelamin_terlapor') == 'Laki-laki' || $data->jenis_kelamin_terlapor == 'Laki-laki' ?  'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ old('jenis_kelamin_terlapor') == 'Perempuan' || $data->jenis_kelamin_terlapor == 'Perempuan' ?  'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                            @if($errors->has('jenis_kelamin_terlapor'))
                                                <span class="text-danger">{{ $errors->first('jenis_kelamin_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_terlapor" style="font-weight: bold">Pekerjaan Terlapor<span class="text-danger">*</span></label>
                                            <input type="text" id="pekerjaan_terlapor" class="form-control" placeholder="..." name="pekerjaan_terlapor"
                                                value="{{ old('pekerjaan_terlapor') ? old('pekerjaan_terlapor') : $data->pekerjaan_terlapor }}">
                                            @if($errors->has('pekerjaan_terlapor'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_terlapor" style="font-weight: bold">Alamat Terlapor<span class="text-danger">*</span></label>
                                            <textarea name="alamat_terlapor" id="alamat_terlapor" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_terlapor') ? old('alamat_terlapor') : $data->alamat_terlapor }}</textarea>
                                            @if($errors->has('alamat_terlapor'))
                                                <span class="text-danger">{{ $errors->first('alamat_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_telp_terlapor" style="font-weight: bold">No Telepon Terlapor<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp_terlapor" class="form-control" placeholder="..." name="no_telp_terlapor"
                                                value="{{ old('no_telp_terlapor') ? old('no_telp_terlapor') : $data->no_telp_terlapor }}">
                                            @if($errors->has('no_telp_terlapor'))
                                                <span class="text-danger">{{ $errors->first('no_telp_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email_terlapor" style="font-weight: bold">Email Terlapor</label>
                                            <input type="email" id="email_terlapor" class="form-control" placeholder="..." name="email_terlapor"
                                                value="{{ old('email_terlapor') ? old('email_terlapor') : $data->email_terlapor }}">
                                            @if($errors->has('email_terlapor'))
                                                <span class="text-danger">{{ $errors->first('email_terlapor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama_terlapor" style="font-weight: bold;">Agama Terlapor<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama_terlapor">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam"
                                                    {{ old('agama_terlapor') == 'Islam' || $data->agama_terlapor == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan"
                                                    {{ old('agama_terlapor') == 'Protestan' || $data->agama_terlapor == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik"
                                                    {{ old('agama_terlapor') == 'Katolik' || $data->agama_terlapor == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu"
                                                    {{ old('agama_terlapor') == 'Hindu' || $data->agama_terlapor == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha"
                                                    {{ old('agama_terlapor') == 'Buddha' || $data->agama_terlapor == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu"
                                                    {{ old('agama_terlapor') == 'Khonghucu' || $data->agama_terlapor == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama_terlapor'))
                                                <span class="text-danger">{{ $errors->first('agama_terlapor') }}</span>
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
                            <h4 class="card-title">4. Data Korban</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_korban" style="font-weight: bold">Nama Korban<span class="text-danger">*</span></label>
                                            <input type="text" id="nama_korban" class="form-control" placeholder="..." name="nama_korban"
                                                value="{{ old('nama_korban') ? old('nama_korban') : $data->nama_korban }}">
                                            @if($errors->has('nama_korban'))
                                                <span class="text-danger">{{ $errors->first('nama_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir_korban" style="font-weight: bold">Tempat Lahir Korban<span class="text-danger">*</span></label>
                                            <input type="text" id="tempat_lahir_korban" class="form-control" placeholder="..." name="tempat_lahir_korban"
                                                value="{{ old('tempat_lahir_korban') ? old('tempat_lahir_korban') : $data->tempat_lahir_korban }}">
                                            @if($errors->has('tempat_lahir_korban'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_korban" style="font-weight: bold">Tanggal Lahir Korban<span class="text-danger">*</span></label>
                                            <input type="date" id="tanggal_lahir_korban" class="form-control" placeholder="..." name="tanggal_lahir_korban"
                                                value="{{ old('tanggal_lahir_korban') ? old('tanggal_lahir_korban') : $data->tanggal_lahir_korban }}">
                                            @if($errors->has('tanggal_lahir_korban'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="umur_korban" style="font-weight: bold">Umur Korban<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="umur_korban" class="form-control" placeholder="..." name="umur_korban"
                                                value="{{ old('umur_korban') ? old('umur_korban') : $data->umur_korban }}">
                                            @if($errors->has('umur_korban'))
                                                <span class="text-danger">{{ $errors->first('umur_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin_korban" style="font-weight: bold">Jenis kelamin Korban<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="jenis_kelamin_korban">
                                                <option selected disabled value="">...</option>
                                                <option value="Laki-laki"
                                                    {{ old('jenis_kelamin_korban') == 'Laki-laki' || $data->jenis_kelamin_korban == 'Laki-laki' ?  'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ old('jenis_kelamin_korban') == 'Perempuan' || $data->jenis_kelamin_korban == 'Perempuan' ?  'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                            @if($errors->has('jenis_kelamin_korban'))
                                                <span class="text-danger">{{ $errors->first('jenis_kelamin_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_korban" style="font-weight: bold">Pekerjaan Korban<span class="text-danger">*</span></label>
                                            <input type="text" id="pekerjaan_korban" class="form-control" placeholder="..." name="pekerjaan_korban"
                                                value="{{ old('pekerjaan_korban') ? old('pekerjaan_korban') : $data->pekerjaan_korban }}">
                                            @if($errors->has('pekerjaan_korban'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_korban" style="font-weight: bold">Alamat Korban<span class="text-danger">*</span></label>
                                            <textarea name="alamat_korban" id="alamat_korban" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_korban') ? old('alamat_korban') : $data->alamat_korban }}</textarea>
                                            @if($errors->has('alamat_korban'))
                                                <span class="text-danger">{{ $errors->first('alamat_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_telp_korban" style="font-weight: bold">No Telepon Korban<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp_korban" class="form-control" placeholder="..." name="no_telp_korban"
                                                value="{{ old('no_telp_korban') ? old('no_telp_korban') : $data->no_telp_korban }}">
                                            @if($errors->has('no_telp_korban'))
                                                <span class="text-danger">{{ $errors->first('no_telp_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email_korban" style="font-weight: bold">Email Korban</label>
                                            <input type="email" id="email_korban" class="form-control" placeholder="..." name="email_korban"
                                                value="{{ old('email_korban') ? old('email_korban') : $data->email_korban }}">
                                            @if($errors->has('email_korban'))
                                                <span class="text-danger">{{ $errors->first('email_korban') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama_korban" style="font-weight: bold;">Agama Korban<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama_korban">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam"
                                                    {{ old('agama_korban') == 'Islam' || $data->agama_korban == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan"
                                                    {{ old('agama_korban') == 'Protestan' || $data->agama_korban == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik"
                                                    {{ old('agama_korban') == 'Katolik' || $data->agama_korban == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu"
                                                    {{ old('agama_korban') == 'Hindu' || $data->agama_korban == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha"
                                                    {{ old('agama_korban') == 'Buddha' || $data->agama_korban == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu"
                                                    {{ old('agama_korban') == 'Khonghucu' || $data->agama_korban == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama_korban'))
                                                <span class="text-danger">{{ $errors->first('agama_korban') }}</span>
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
                            <h4 class="card-title">5. Data Saksi</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_saksi" style="font-weight: bold">Nama Saksi<span class="text-danger">*</span></label>
                                            <input type="text" id="nama_saksi" class="form-control" placeholder="..." name="nama_saksi"
                                                value="{{ old('nama_saksi') ? old('nama_saksi') : $data->nama_saksi }}">
                                            @if($errors->has('nama_saksi'))
                                                <span class="text-danger">{{ $errors->first('nama_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir_saksi" style="font-weight: bold">Tempat Lahir Saksi<span class="text-danger">*</span></label>
                                            <input type="text" id="tempat_lahir_saksi" class="form-control" placeholder="..." name="tempat_lahir_saksi"
                                                value="{{ old('tempat_lahir_saksi') ? old('tempat_lahir_saksi') : $data->tempat_lahir_saksi }}">
                                            @if($errors->has('tempat_lahir_saksi'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir_saksi" style="font-weight: bold">Tanggal Lahir Saksi<span class="text-danger">*</span></label>
                                            <input type="date" id="tanggal_lahir_saksi" class="form-control" placeholder="..." name="tanggal_lahir_saksi"
                                                value="{{ old('tanggal_lahir_saksi') ? old('tanggal_lahir_saksi') : $data->tanggal_lahir_saksi }}">
                                            @if($errors->has('tanggal_lahir_saksi'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="umur_saksi" style="font-weight: bold">Umur Saksi<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="umur_saksi" class="form-control" placeholder="..." name="umur_saksi"
                                                value="{{ old('umur_saksi') ? old('umur_saksi') : $data->umur_saksi }}">
                                            @if($errors->has('umur_saksi'))
                                                <span class="text-danger">{{ $errors->first('umur_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin_saksi" style="font-weight: bold">Jenis kelamin Saksi<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="jenis_kelamin_saksi">
                                                <option selected disabled value="">...</option>
                                                <option value="Laki-laki"
                                                    {{ old('jenis_kelamin_saksi') == 'Laki-laki' || $data->jenis_kelamin_saksi == 'Laki-laki' ?  'selected' : '' }}>
                                                    Laki-laki
                                                </option>
                                                <option value="Perempuan"
                                                    {{ old('jenis_kelamin_saksi') == 'Perempuan' || $data->jenis_kelamin_saksi == 'Perempuan' ?  'selected' : '' }}>
                                                    Perempuan
                                                </option>
                                            </select>
                                            @if($errors->has('jenis_kelamin_saksi'))
                                                <span class="text-danger">{{ $errors->first('jenis_kelamin_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_saksi" style="font-weight: bold">Pekerjaan Saksi<span class="text-danger">*</span></label>
                                            <input type="text" id="pekerjaan_saksi" class="form-control" placeholder="..." name="pekerjaan_saksi"
                                                value="{{ old('pekerjaan_saksi') ? old('pekerjaan_saksi') : $data->pekerjaan_saksi }}">
                                            @if($errors->has('pekerjaan_saksi'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_saksi" style="font-weight: bold">Alamat Saksi<span class="text-danger">*</span></label>
                                            <textarea name="alamat_saksi" id="alamat_saksi" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_saksi') ? old('alamat_saksi') : $data->alamat_saksi }}</textarea>
                                            @if($errors->has('alamat_saksi'))
                                                <span class="text-danger">{{ $errors->first('alamat_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_telp_saksi" style="font-weight: bold">No Telepon Saksi<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp_saksi" class="form-control" placeholder="..." name="no_telp_saksi"
                                                value="{{ old('no_telp_saksi') ? old('no_telp_saksi') : $data->no_telp_saksi }}">
                                            @if($errors->has('no_telp_saksi'))
                                                <span class="text-danger">{{ $errors->first('no_telp_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email_saksi" style="font-weight: bold">Email Saksi</label>
                                            <input type="email" id="email_saksi" class="form-control" placeholder="..." name="email_saksi"
                                                value="{{ old('email_saksi') ? old('email_saksi') : $data->email_saksi }}">
                                            @if($errors->has('email_saksi'))
                                                <span class="text-danger">{{ $errors->first('email_saksi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama_saksi" style="font-weight: bold;">Agama Saksi<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama_saksi">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam"
                                                    {{ old('agama_saksi') == 'Islam' || $data->agama_saksi == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan"
                                                    {{ old('agama_saksi') == 'Protestan' || $data->agama_saksi == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik"
                                                    {{ old('agama_saksi') == 'Katolik' || $data->agama_saksi == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu"
                                                    {{ old('agama_saksi') == 'Hindu' || $data->agama_saksi == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha"
                                                    {{ old('agama_saksi') == 'Buddha' || $data->agama_saksi == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu"
                                                    {{ old('agama_saksi') == 'Khonghucu' || $data->agama_saksi == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama_saksi'))
                                                <span class="text-danger">{{ $errors->first('agama_saksi') }}</span>
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
                            <h4 class="card-title">6. Uraian Kejadian</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="uraian_kejadian" style="font-weight: bold">Uraian Kejadian<span class="text-danger">*</span></label>
                                            <textarea name="uraian_kejadian" id="uraian_kejadian" cols="24" class="form-control" placeholder="..."
                                                rows="20">{{ old('uraian_kejadian') ? old('uraian_kejadian') : $data->uraian_kejadian }}</textarea>
                                            @if($errors->has('uraian_kejadian'))
                                                <span class="text-danger">{{ $errors->first('uraian_kejadian') }}</span>
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
                <button class="btn btn-primary btn-lg" type="submit" id="submit-update-pengaduan-masyarakat" onClick="changeToLoadingFormUpdatePengaduanMasyarakat()">Submit</button>
            </div>
        </div>
    </section>
</div>

<script>
    function changeToLoadingFormUpdatePengaduanMasyarakat() {
        var btn = document.getElementById('submit-update-pengaduan-masyarakat');
        btn.innerHTML = '<span class="spinner-border" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        // Simulating a delay of 2 seconds for demonstration purposes
        setTimeout(function () {
            // Enable the button and change the text back to "Login" after the delay
            btn.disabled = false;
            btn.innerHTML = 'Submit';

            // Submit the form
            submitFormUpdateSim();
        }, 2000);
    }

    function submitFormUpdateSim() {
        // Get the form element
        var form = document.getElementById('form-update-pengaduan-masyarakat');

        // Submit the form
        form.submit();
    }

</script>

@endsection
