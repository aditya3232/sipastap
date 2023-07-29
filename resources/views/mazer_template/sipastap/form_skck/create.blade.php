@extends('mazer_template.layouts_sipastap.app')
@section('title', 'Formulir Permohonan Sim')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Formulir Permohonan SKCK</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('sipastap.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ route('sipastap.formsim.store') }}" id="form-create-sim" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Diri</h4>
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
                                            <label for="keperluan_skck" style="font-weight: bold">Keperluan SKCK<span class="text-danger">*</span></label>
                                            <input type="text" id="keperluan_skck" class="form-control" placeholder="..." name="keperluan_skck"
                                                value="{{ old('keperluan_skck') ? old('keperluan_skck') : '' }}">
                                            @if($errors->has('keperluan_skck'))
                                                <span class="text-danger">{{ $errors->first('keperluan_skck') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir" style="font-weight: bold;">Tempat Lahir <span class="text-danger">*</span></label>
                                            <input type="text" id="tempat_lahir" class="form-control" placeholder="..." name="tempat_lahir"
                                                value="{{ old('tempat_lahir') ? old('tempat_lahir') : '' }}">
                                            @if($errors->has('tempat_lahir'))
                                                <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir" style="font-weight: bold;">Tanggal Lahir <span class="text-danger">*</span></label>
                                            <input type="date" id="tanggal_lahir" class="form-control" placeholder="..." name="tanggal_lahir"
                                                value="{{ old('tanggal_lahir') ? old('tanggal_lahir') : '' }}">
                                            @if($errors->has('tanggal_lahir'))
                                                <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama" style="font-weight: bold;">Agama <span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam" {{ old('agama') == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan" {{ old('agama') == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik" {{ old('agama') == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu" {{ old('agama') == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha" {{ old('agama') == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu" {{ old('agama') == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama'))
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan" style="font-weight: bold">Kebangsaan<span class="text-danger">*</span></label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="..." name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin" style="font-weight: bold;">Jenis Kelamin <span class="text-danger">*</span></label>
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
                                            <label for="status_perkawinan" style="font-weight: bold;">Kawin/Tidak Kawin<span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="status_perkawinan">
                                                <option selected disabled value="">...</option>
                                                <option value="Menikah" {{ old('status_perkawinan') == 'Menikah' ?  'selected' : '' }}>
                                                    Menikah
                                                </option>
                                                <option value="Tidak Menikah"
                                                    {{ old('status_perkawinan') == 'Tidak Menikah' ?  'selected' : '' }}>
                                                    Tidak Menikah
                                                </option>
                                            </select>
                                            @if($errors->has('status_perkawinan'))
                                                <span class="text-danger">{{ $errors->first('status_perkawinan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan" style="font-weight: bold;">Pekerjaan<span class="text-danger">*</span></label>
                                            <input type="text" id="pekerjaan" class="form-control" placeholder="..." name="pekerjaan"
                                                value="{{ old('pekerjaan') ? old('pekerjaan') : '' }}">
                                            @if($errors->has('pekerjaan'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat_saat_ini" style="font-weight: bold;">Alamat sekarang<span class="text-danger">*</span></label>
                                            <textarea name="alamat_saat_ini" id="alamat_saat_ini" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_saat_ini') ? old('alamat_saat_ini') : '' }}</textarea>
                                            @if($errors->has('alamat_saat_ini'))
                                                <span class="text-danger">{{ $errors->first('alamat_saat_ini') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nik" style="font-weight: bold;">Nomor Kartu Penduduk <span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="nik" class="form-control" placeholder="..." name="nik"
                                                value="{{ old('nik') ? old('nik') : '' }}">
                                            @if($errors->has('nik'))
                                                <span class="text-danger">{{ $errors->first('nik') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_paspor" style="font-weight: bold;">No. Paspor</label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_paspor" class="form-control" placeholder="..." name="no_paspor"
                                                value="{{ old('no_paspor') ? old('no_paspor') : '' }}">
                                            @if($errors->has('no_paspor'))
                                                <span class="text-danger">{{ $errors->first('no_paspor') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_kitas_kitap" style="font-weight: bold;">No. KITAS/KITAP</label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_kitas_kitap" class="form-control" placeholder="..." name="no_kitas_kitap"
                                                value="{{ old('no_kitas_kitap') ? old('no_kitas_kitap') : '' }}">
                                            @if($errors->has('no_kitas_kitap'))
                                                <span class="text-danger">{{ $errors->first('no_kitas_kitap') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="no_telp" style="font-weight: bold;">No. Telepon <span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp" class="form-control" placeholder="..." name="no_telp"
                                                value="{{ old('no_telp') ? old('no_telp') : '' }}">
                                            @if($errors->has('no_telp'))
                                                <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Hubungan Kekeluargaan (Relationship) :</h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Istri / Suami (Wife / Husband)</h4>
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
                                            <label for="umur" style="font-weight: bold;">Umur<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="umur" class="form-control" placeholder="..." name="umur"
                                                value="{{ old('umur') ? old('umur') : '' }}">
                                            @if($errors->has('umur'))
                                                <span class="text-danger">{{ $errors->first('umur') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama" style="font-weight: bold;">Agama <span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam" {{ old('agama') == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan" {{ old('agama') == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik" {{ old('agama') == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu" {{ old('agama') == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha" {{ old('agama') == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu" {{ old('agama') == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama'))
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan" style="font-weight: bold">Kebangsaan<span class="text-danger">*</span></label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="..." name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat" style="font-weight: bold">Alamat<span class="text-danger">*</span></label>
                                            <input type="text" id="alamat" class="form-control" placeholder="..." name="alamat"
                                                value="{{ old('alamat') ? old('alamat') : '' }}">
                                            @if($errors->has('alamat'))
                                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
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
                            <h4 class="card-title">Bapak Sendiri (Father)</h4>
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
                                            <label for="umur" style="font-weight: bold;">Umur<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="umur" class="form-control" placeholder="..." name="umur"
                                                value="{{ old('umur') ? old('umur') : '' }}">
                                            @if($errors->has('umur'))
                                                <span class="text-danger">{{ $errors->first('umur') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama" style="font-weight: bold;">Agama <span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam" {{ old('agama') == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan" {{ old('agama') == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik" {{ old('agama') == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu" {{ old('agama') == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha" {{ old('agama') == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu" {{ old('agama') == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama'))
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan" style="font-weight: bold">Kebangsaan<span class="text-danger">*</span></label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="..." name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat" style="font-weight: bold">Alamat<span class="text-danger">*</span></label>
                                            <input type="text" id="alamat" class="form-control" placeholder="..." name="alamat"
                                                value="{{ old('alamat') ? old('alamat') : '' }}">
                                            @if($errors->has('alamat'))
                                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
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
                            <h4 class="card-title">Ibu Sendiri (Mother)</h4>
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
                                            <label for="umur" style="font-weight: bold;">Umur<span class="text-danger">*</span></label>
                                            <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="umur" class="form-control" placeholder="..." name="umur"
                                                value="{{ old('umur') ? old('umur') : '' }}">
                                            @if($errors->has('umur'))
                                                <span class="text-danger">{{ $errors->first('umur') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="agama" style="font-weight: bold;">Agama <span class="text-danger">*</span></label>
                                            <select class="form-control form-select" name="agama">
                                                <option selected disabled value="">...</option>
                                                <option value="Islam" {{ old('agama') == 'Islam' ?  'selected' : '' }}>
                                                    Islam
                                                </option>
                                                <option value="Protestan" {{ old('agama') == 'Protestan' ?  'selected' : '' }}>
                                                    Protestan
                                                </option>
                                                <option value="Katolik" {{ old('agama') == 'Katolik' ?  'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu" {{ old('agama') == 'Hindu' ?  'selected' : '' }}>
                                                    Hindu
                                                </option>
                                                <option value="Buddha" {{ old('agama') == 'Buddha' ?  'selected' : '' }}>
                                                    Buddha
                                                </option>
                                                <option value="Khonghucu" {{ old('agama') == 'Khonghucu' ?  'selected' : '' }}>
                                                    Khonghucu
                                                </option>
                                            </select>
                                            @if($errors->has('agama'))
                                                <span class="text-danger">{{ $errors->first('agama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan" style="font-weight: bold">Kebangsaan<span class="text-danger">*</span></label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="..." name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="alamat" style="font-weight: bold">Alamat<span class="text-danger">*</span></label>
                                            <input type="text" id="alamat" class="form-control" placeholder="..." name="alamat"
                                                value="{{ old('alamat') ? old('alamat') : '' }}">
                                            @if($errors->has('alamat'))
                                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
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
