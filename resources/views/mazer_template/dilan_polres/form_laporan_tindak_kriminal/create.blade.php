@extends('mazer_template.layouts_dilanpolres.app')
@section('title', 'Formulir Laporan Tindak Kriminal')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Formulir Laporan Tindak Kriminal</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('dilanpolres.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
            </div>
            <form class="form" action="{{ route('dilanpolres.formlaporantindakkriminal.store') }}" id="form-create-laporanTindakKriminal" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama" style="font-weight: bold">Nama</label>
                                            <input type="text" id="nama" class="form-control" placeholder="..." name="nama" value="{{ old('nama') ? old('nama') : '' }}">
                                            @if($errors->has('nama'))
                                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nama_kecil_alias" style="font-weight: bold">Nama Kecil / Alias <span class="text-danger">*</span></label>
                                            <input type="text" id="nama_kecil_alias" class="form-control" placeholder="..." name="nama_kecil_alias"
                                                value="{{ old('nama_kecil_alias') ? old('nama_kecil_alias') : '' }}">
                                            @if($errors->has('nama_kecil_alias'))
                                                <span class="text-danger">{{ $errors->first('nama_kecil_alias') }}</span>
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
                                            <label for="nik" style="font-weight: bold;">Nik <span class="text-danger">*</span></label>
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
                                            <label for="pekerjaan" style="font-weight: bold;">Pekerjaan <span class="text-danger">*</span></label>
                                            <input type="text" id="pekerjaan" class="form-control" placeholder="..." name="pekerjaan"
                                                value="{{ old('pekerjaan') ? old('pekerjaan') : '' }}">
                                            @if($errors->has('pekerjaan'))
                                                <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="kebangsaan" style="font-weight: bold;">Kebangsaan <span class="text-danger">*</span></label>
                                            <input type="text" id="kebangsaan" class="form-control" placeholder="..." name="kebangsaan"
                                                value="{{ old('kebangsaan') ? old('kebangsaan') : '' }}">
                                            @if($errors->has('kebangsaan'))
                                                <span class="text-danger">{{ $errors->first('kebangsaan') }}</span>
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
                                            <label for="alamat_saat_ini" style="font-weight: bold;">Alamat Saat Ini <span class="text-danger">*</span></label>
                                            <textarea name="alamat_saat_ini" id="alamat_saat_ini" cols="24" class="form-control" placeholder="..."
                                                rows="3">{{ old('alamat_saat_ini') ? old('alamat_saat_ini') : '' }}</textarea>
                                            @if($errors->has('alamat_saat_ini'))
                                                <span class="text-danger">{{ $errors->first('alamat_saat_ini') }}</span>
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
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="email" style="font-weight: bold;">Email</label>
                                            <input type="text" id="email" class="form-control" placeholder="..." name="email"
                                                value="{{ old('email') ? old('email') : '' }}">
                                            @if($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="tindak_kriminal" style="font-weight: bold;">Tindak Kriminal</label>
                                            <input type="text" id="tindak_kriminal" class="form-control" placeholder="..." name="tindak_kriminal"
                                                value="{{ old('tindak_kriminal') ? old('tindak_kriminal') : '' }}">
                                            @if($errors->has('tindak_kriminal'))
                                                <span class="text-danger">{{ $errors->first('tindak_kriminal') }}</span>
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
                <button class="btn btn-primary btn-lg" type="submit" id="submit-create-laporanTindakKriminal" onClick="changeToLoadingFormLaporanTindakKriminal()">Submit</button>
            </div>
        </div>
    </section>
</div>

<script>
    function changeToLoadingFormLaporanTindakKriminal() {
        var btn = document.getElementById('submit-create-laporanTindakKriminal');
        btn.innerHTML = '<span class="spinner-border" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        setTimeout(function () {
            btn.disabled = false;
            btn.innerHTML = 'Submit';

            submitFormSim();
        }, 2000);
    }

    function submitFormSim() {
        var form = document.getElementById('form-create-laporanTindakKriminal');

        form.submit();
    }

</script>

@endsection
