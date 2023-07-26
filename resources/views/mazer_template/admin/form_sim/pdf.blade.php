<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        body {
            background-image: url('../../../assets/images/logo/polantas.png');
            background-size: 60% auto;
            /* Set the background image size to 50% of its original width, while maintaining aspect ratio */
            background-position: center;
            background-repeat: no-repeat;
            filter: grayscale(100%);
            font-weight: bold;
        }

        page[size="F4"] {
            background: white;
            width: 21cm;
            height: 29.7cm;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        @mediaprint{

        /*  */
        body,
        page[size="F4"] {
            margin: 0;
            /* box-shadow: 0; */
        }
        }

        .small-text {
            font-size: 8pt;
        }

        .small-minus1-text {
            font-size: 6pt;
        }

        .medium-text {
            font-size: 10pt;
        }

        .large-text {
            font-size: 12pt;
        }

        .bold {
            font-weight: bold;
        }

        .rounded-div {
            border-radius: 10px;
        }

        .text-blue {
            color: #007bff;
        }

    </style>
    <div class="container">
        <div class="row align-items-start">

            <div class="col-2">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h1 class="small-minus1-text">No. Seri:</h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <h1 class="small-minus1-text"></h1>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6 text-center">
                <h1 class="large-text bold">KEPOLISIAN NEGARA REPUBLIK INDONESIA</h1>
                <img src="/assets/images/logo/polri_logo.png" alt="" style=" width: 60px; height: auto;">
                <h1 class="medium-text bold">FORMULIR PENDAFTARAN</h1>
                <h1 class="medium-text bold">"SURAT IZIN MENGEMUDI" (SIM)</h1>
                <h1 class="medium-text bold">KENDARAAN BERMOTOR</h1>
            </div>

            <div class="col-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">
                                <h1 class="small-minus1-text bold">No. Seri:</h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="text-center text-bold">
                                    <h1 class="small-minus1-text bold">BUKTI REGISTRASI PESERTA UJI SIM</h1>
                                </div>
                                <div class="text-left">
                                    <table class="table-borderless">
                                        <tr>
                                            <td>
                                                <h1 class="small-minus1-text">a. Nama :</h1>
                                            </td>
                                            <td>
                                                <h1 class="small-minus1-text text-blue">{{ $data->nama }}</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 class="small-minus1-text">b. Alamat :</h1>
                                            </td>
                                            <td>
                                                <h1 class="small-minus1-text text-blue">{{ $data->alamat_saat_ini }}</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 class="small-minus1-text">Data Permohonan</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 class="small-minus1-text">a. Jenis Permohonan :</h1>
                                            </td>
                                            <td>
                                                <h1 class="small-minus1-text text-blue">{{ $data->jenis_permohonan }}</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h1 class="small-minus1-text">b. Gol. SIM :</h1>
                                            </td>
                                            <td>
                                                <h1 class="small-minus1-text text-blue">{{ $data->gol_sim }}</h1>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 rounded">
                <h1 class="medium-text bold">1. DATA PESERTA UJI</h1>
                <h1 class="medium-text">a. Jenis Permohonan</h1>
                <table>
                    <tr>
                        <td>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->jenis_permohonan == 'Baru' ? 'checked' : '' }}
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <h1 class="small-text">BARU</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->jenis_permohonan == 'Perpanjang' ? 'checked' : '' }}
                                        id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        <h1 class="small-text">PERPANJANGAN</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value=""
                                        {{ $data->jenis_permohonan == 'Peningkatan Golongan' ? 'checked' : '' }} id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        <h1 class="small-text">PENINGKATAN GOLONGAN</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value=""
                                        {{ $data->jenis_permohonan == 'Penurunan Golongan' ? 'checked' : '' }} id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        <h1 class="small-text">PENURUNAN GOLONGAN</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value=""
                                        {{ $data->jenis_permohonan == 'Penggantian (Hilang)' ? 'checked' : '' }} id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        <h1 class="small-text">PENGGANTIAN (HILANG)</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value=""
                                        {{ $data->jenis_permohonan == 'Penggantian (Rusak)' ? 'checked' : '' }} id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        <h1 class="small-text">PENGGANTIAN (RUSAK)</h1>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <h1 class="medium-text">b. Golongan SIM</h1>
                <table>
                    <tr>
                        <td>
                            <div>
                                <h1 class="small-text">1) SIM Perseorangan</h1>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'A' ? 'checked' : '' }} id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <h1 class="small-text">A</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'B I' ? 'checked' : '' }}
                                        id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        <h1 class="small-text">B I</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'B II' ? 'checked' : '' }}
                                        id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        <h1 class="small-text">B II</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'C' ? 'checked' : '' }} id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        <h1 class="small-text">C</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'D' ? 'checked' : '' }} id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        <h1 class="small-text">D</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'D I' ? 'checked' : '' }}
                                        id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        <h1 class="small-text">D I</h1>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <h1 class="small-text">1) SIM Umum</h1>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'A UMUM' ? 'checked' : '' }}
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <h1 class="small-text">A UMUM</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'B I UMUM' ? 'checked' : '' }}
                                        id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        <h1 class="small-text">B I UMUM</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->gol_sim == 'B II UMUM' ? 'checked' : '' }}
                                        id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        <h1 class="small-text">B II UMUM</h1>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>


                <h1 class="medium-text">
                    b. Alamat Email :
                    <span class="text-blue">{{ $data->email }}</span>
                </h1>
                <h1 class="medium-text">
                    c. Polda Kedatangan :
                    <span class="text-blue">{{ $data->polda_kedatangan }}</span>
                </h1>
                <h1 class="medium-text">d. Lokasi Kedatangan</h1>
                <table>
                    <tr>
                        <td>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->lokasi_kedatangan == 'SATPAS' ? 'checked' : '' }}
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <h1 class="small-text">SATPAS</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->lokasi_kedatangan == 'SIMLING' ? 'checked' : '' }}
                                        id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        <h1 class="small-text">SIMLING</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->lokasi_kedatangan == 'GERAI' ? 'checked' : '' }}
                                        id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        <h1 class="small-text">GERAI</h1>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" {{ $data->lokasi_kedatangan == 'LAINNYA:' ? 'checked' : '' }}
                                        id="defaultCheck4">
                                    <label class="form-check-label" for="defaultCheck4">
                                        <h1 class="small-text">LAINNYA</h1>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>


            </div>
            <div class="col-12">
                <h1 class="medium-text bold">2. DATA PRIBADI</h1>
                <h1 class="medium-text">
                    a. Nama :
                    <span class="text-blue">{{ $data->nama }}</span>
                </h1>
                <h1 class="medium-text">
                    b. Jenis Kelamin :
                    <span class="text-blue">{{ $data->jenis_kelamin }}</span>
                </h1>
                <h1 class="medium-text">
                    c. Tempat Lahir :
                    <span class="text-blue">{{ $data->tempat_lahir }}</span>
                </h1>
                <h1 class="medium-text">
                    d. Tanggal Lahir :
                    <span class="text-blue">{{ $data->tanggal_lahir }}</span>
                </h1>
                <h1 class="medium-text">
                    e. Tinggi Badan :
                    <span class="text-blue"></span>
                </h1>
                <h1 class="medium-text">
                    f. Pekerjaan :
                    <span class="text-blue">{{ $data->pekerjaan }}</span>
                </h1>
                <h1 class="medium-text">
                    g. No.Telp :
                    <span class="text-blue">{{ $data->no_telp }}</span>
                </h1>
                <h1 class="medium-text">
                    h. Alamat :
                    <span class="text-blue">{{ $data->alamat_saat_ini }}</span>
                </h1>
                <h1 class="medium-text">
                    i. Pendidikan Terakhir :
                    <span class="text-blue">{{ $data->pendidikan_terakhir }}</span>
                </h1>
                <div>
                    <table class="medium-text">
                        <tr class="ml-2">
                            <td>
                                <h1 class="medium-text">j. Fotokopi KTP :</h1>
                            </td>
                            <td>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" {{ $data->fotokopi_ktp == 'Ada' ? 'checked' : '' }}
                                            id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <h1 class="small-text">ADA</h1>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" {{ $data->fotokopi_ktp == 'Tidak Ada' ? 'checked' : '' }}
                                            id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            <h1 class="small-text">TIDAK ADA</h1>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 class="medium-text">k. Berkaca Mata :</h1>
                            </td>
                            <td>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" {{ $data->berkacamata == 'Iya' ? 'checked' : '' }}
                                            id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <h1 class="small-text">IYA</h1>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" {{ $data->berkacamata == 'Tidak' ? 'checked' : '' }}
                                            id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            <h1 class="small-text">TIDAK</h1>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 class="medium-text">l. Cacat Fisik :</h1>
                            </td>
                            <td>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" {{ $data->cacat_fisik == 'Iya' ? 'checked' : '' }}
                                            id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <h1 class="small-text">IYA</h1>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" {{ $data->cacat_fisik == 'Tidak' ? 'checked' : '' }}
                                            id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            <h1 class="small-text">TIDAK</h1>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h1 class="medium-text">m. Sertifikat Mengemudi :</h1>
                            </td>
                            <td>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value="" {{ $data->sertifikat_mengemudi == 'Ada' ? 'checked' : '' }}
                                            id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <h1 class="small-text">ADA</h1>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" value=""
                                            {{ $data->sertifikat_mengemudi == 'Tidak Ada' ? 'checked' : '' }} id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            <h1 class="small-text">TIDAK ADA</h1>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>

            </div>
            <div class="col-12">

                <h1 class="medium-text bold">3. HASIL UJIAN</h1>
                <div class="row">
                    <div class="col-6">
                        <h1 class="medium-text">a. Teori</h1>
                        <div>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                {{ $data->hasil_ujian_teori == 'Lulus' ? 'checked' : '' }} id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                <h1 class="small-text">LULUS</h1>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                {{ $data->hasil_ujian_teori == 'Belum Lulus' ? 'checked' : '' }} id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck2">
                                                <h1 class="small-text">BELUM LULUS</h1>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-6">
                        <h1 class="medium-text">b. Uji Keterampilan Pengemudi (Simulator)</h1>
                        <div>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                {{ $data->hasil_uji_keterampilan_pengemudi == 'Lulus' ? 'checked' : '' }} id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                <h1 class="small-text">LULUS</h1>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                {{ $data->hasil_uji_keterampilan_pengemudi == 'Belum Lulus' ? 'checked' : '' }} id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck2">
                                                <h1 class="small-text">BELUM LULUS</h1>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h1 class="medium-text">c. Praktik I</h1>
                        <div>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="" {{ $data->praktik_satu == 'Lulus' ? 'checked' : '' }}
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                <h1 class="small-text">LULUS</h1>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                {{ $data->praktik_satu == 'Belum Lulus' ? 'checked' : '' }} id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck2">
                                                <h1 class="small-text">BELUM LULUS</h1>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-6">
                        <h1 class="medium-text">d. Praktik II</h1>
                        <div>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value="" {{ $data->praktik_dua == 'Lulus' ? 'checked' : '' }}
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                <h1 class="small-text">LULUS</h1>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" value=""
                                                {{ $data->praktik_dua == 'Belum Lulus' ? 'checked' : '' }} id="defaultCheck2">
                                            <label class="form-check-label" for="defaultCheck2">
                                                <h1 class="small-text">BELUM LULUS</h1>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-end">
            <div class="col"></div>
            <div class="col">
                <h1 class="medium-text">
                    Peserta Uji
                </h1>
                <h1 class="medium-text">

                </h1>
                <br>
                <h1 class="medium-text">
                    ..........................................................................
                </h1>
            </div>
            <div class="col">
                <h1 class="medium-text">
                    ..........................................................................
                </h1>
                <h1 class="medium-text">
                    Petugas
                </h1>
                <br>
                <h1 class="medium-text">
                    ..........................................................................
                </h1>
                <h1 class="medium-text">
                    ...................., NRP. .........................................
                </h1>
            </div>
        </div>
    </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>

<script type="text/javascript">
    window.onload = function () {

        var nik = "{!! $data->nik !!}";
        var windowTitle = "Permohonan_sim_nik:_" + nik + ".pdf";
        document.title = windowTitle;
        window.print();
    };

</script>
