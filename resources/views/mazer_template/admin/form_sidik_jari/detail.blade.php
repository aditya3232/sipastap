@extends('mazer_template.layouts.app')
@section('title', 'Detail Formulir Pendaftaran Sidik Jari')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Formulir Pendaftaran Sidik Jari</h3>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="mb-4">
                <a href="{{ route('admin.formsidikjari.index') }}" type="button" class="btn btn-primary"><i class="bi bi-arrow-return-left" style="font-size: 13px;"></i> Kembali</a>
                <a type="button" class="btn btn-danger" id="cetak-pdf-form-sidikJari" onClick="cetakPdfFormSidikJari()"><i class="bi bi-printer" style="font-size: 13px;"></i> Cetak Pdf</a>
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
                                        <p class="font-weight-bold text-primary"><i class="bi bi-clock"></i> created at :
                                            {{ ''.\Carbon\Carbon::parse($data->created_at)->format('F j, Y, g:i a') }}
                                        </p>
                                        @if($data->updated_at)
                                            <p class="font-weight-bold text-primary"><i class="bi bi-clock"></i> updated at:
                                                {{ \Carbon\Carbon::parse($data->updated_at)->format('F j, Y, g:i a') }}
                                            </p>
                                        @endif
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama" style="font-weight: bold">Nama <span class="text-danger">*</span></label>
                                        <input type="text" id="nama" class="form-control" value="{{ $data->nama }}" name="nama" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_kecil_alias" style="font-weight: bold">Nama Kecil / Alias <span class="text-danger">*</span></label>
                                        <input type="text" id="nama_kecil_alias" class="form-control" value="{{ $data->nama_kecil_alias }}" name="nama_kecil_alias" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="jenis_kelamin" style="font-weight: bold">Jenis Kelamin <span class="text-danger">*</span></label>
                                        <input type="text" id="jenis_kelamin" class="form-control" value="{{ $data->jenis_kelamin }}" name="jenis_kelamin" disabled>
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tempat_lahir" style="font-weight: bold">Tempat Lahir <span class="text-danger">*</span></label>
                                        <input type="text" id="tempat_lahir" class="form-control" value="{{ $data->tempat_lahir }}" name="tempat_lahir" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="tanggal_lahir" style="font-weight: bold">Tanggal Lahir <span class="text-danger">*</span></label>
                                        <input type="date" id="tanggal_lahir" class="form-control" value="{{ $data->tanggal_lahir }}" name="tanggal_lahir" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nik" style="font-weight: bold">Nik <span class="text-danger">*</span></label>
                                        <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="nik" class="form-control" value="{{ $data->nik }}" name="nik" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="no_paspor" style="font-weight: bold">No. Paspor</label>
                                        <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_paspor" class="form-control" value="{{ $data->no_paspor }}" name="no_paspor" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="pekerjaan" style="font-weight: bold">Pekerjaan <span class="text-danger">*</span></label>
                                        <input type="text" id="pekerjaan" class="form-control" value="{{ $data->pekerjaan }}" name="pekerjaan" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="kebangsaan" style="font-weight: bold">Kebangsaan <span class="text-danger">*</span></label>
                                        <input type="text" id="kebangsaan" class="form-control" value="{{ $data->kebangsaan }}" name="kebangsaan" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="agama" style="font-weight: bold">Agama <span class="text-danger">*</span></label>
                                        <input type="text" id="agama" class="form-control" value="{{ $data->agama }}" name="agama" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="alamat_saat_ini" style="font-weight: bold">Alamat Saat Ini <span class="text-danger">*</span></label>
                                        <textarea name="alamat_saat_ini" id="alamat_saat_ini" cols="24" class="form-control" value="..." rows="3" disabled>{{ $data->alamat_saat_ini }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="no_telp" style="font-weight: bold">No. Telepon <span class="text-danger">*</span></label>
                                        <input oninput="this.value=this.value.replace(/[^0-9]/g,'');" type="number" id="no_telp" class="form-control" value="{{ $data->no_telp }}" name="no_telp" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="email" style="font-weight: bold">Email</label>
                                        <input type="text" id="email" class="form-control" value="{{ $data->email }}" name="email" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="status_pernikahan" style="font-weight: bold">Status Pernikahan <span class="text-danger">*</span></label>
                                        <input type="text" id="status_pernikahan" class="form-control" value="{{ $data->status_pernikahan }}" name="status_pernikahan" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_ayah" style="font-weight: bold">Nama Ayah <span class="text-danger">*</span></label>
                                        <input type="text" id="nama_ayah" class="form-control" value="{{ $data->nama_ayah }}" name="nama_ayah" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="alamat_ayah" style="font-weight: bold">Alamat Ayah</label>
                                        <textarea name="alamat_ayah" id="alamat_ayah" cols="24" class="form-control" value="..." rows="3" disabled>{{ $data->alamat_ayah }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_ibu" style="font-weight: bold">Nama Ibu <span class="text-danger">*</span></label>
                                        <input type="text" id="nama_ibu" class="form-control" value="{{ $data->nama_ibu }}" name="nama_ibu" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="alamat_ibu" style="font-weight: bold">Alamat Ibu</label>
                                        <textarea name="alamat_ibu" id="alamat_ibu" cols="24" class="form-control" value="..." rows="3" disabled>{{ $data->alamat_ibu }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_istri" style="font-weight: bold">Nama Istri</label>
                                        <input type="text" id="nama_istri" class="form-control" value="{{ $data->nama_istri }}" name="nama_istri" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_suami" style="font-weight: bold">Nama Suami</label>
                                        <input type="text" id="nama_suami" class="form-control" value="{{ $data->nama_suami }}" name="nama_suami" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="nama_anak" style="font-weight: bold">Nama Anak</label>
                                        <input type="text" id="nama_anak" class="form-control" value="{{ $data->nama_anak }}" name="nama_anak" disabled>
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

<script>
    function cetakPdfFormSidikJari() {
        var btn = document.getElementById('cetak-pdf-form-sidikJari');
        btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
        btn.disabled = true;

        setTimeout(function () {
            btn.disabled = false;
            btn.innerHTML = '<i class="bi bi-printer" style="font-size: 13px;"></i> Cetak Pdf';

            window.open('{{ route('admin.formsidikjari.pdf',$data->id) }}', '_blank');
        }, 1000);
    }

</script>

@endsection
