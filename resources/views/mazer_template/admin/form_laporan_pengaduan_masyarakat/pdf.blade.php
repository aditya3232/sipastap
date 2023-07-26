<!DOCTYPE html>
<html>

<head>
    <title>Cetak PDF Formulir Laporan Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <style type="text/css">
        .table td,
        .table th {
            font-size: 2px;
        }

        body {
            /* background-image: url('../../../assets/images/logo/polantas.png'); */
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
            font-size: 7pt;
        }

        .small-minus2-text {
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

        .border {
            border: 10px solid black;
        }

        .page-break {
            height: 0;
            page-break-before: always;
        }

    </style>
    <div class="container">
        <div class="row align-items-start">

            <div class="col-12 text-center">
                <h1 class="medium-text bold">KEPOLISIAN NEGARA REPUBLIK INDONESIA</h1>
                <h1 class="medium-text bold">DAERAH MALUKU UTARA</h1>
                <h1 class="medium-text bold">RESOR KOTA TIDORE</h1>
                <h1 class="medium-text bold"><u>Jl. Ahmad Yani no.1 Soasio 97813</u></h1>
                <img src="/assets/images/logo/polri_logo.png" alt="" style=" width: 60px; height: auto;">
                <h1 class="medium-text bold"><u>LAPORAN PENGADUAN</u></h1>
            </div>

        </div>
        <div class="row align-items-center">
            <div class="col-12 rounded">
                <table class="table table-striped table-sm caption-top table-light border-primary">
                    <thead>
                        <tr>
                            <th style="width:25%">
                                <span class="small-minus1-text bold">YANG MELAPORKAN</span>
                            </th>
                            <th style="width:5%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                            <th style="width:70%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->nama_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NIK</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->nik_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TEMPAT LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tempat_lahir_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TANGGAL LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tanggal_lahir_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">UMUR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->umur_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">JENIS KELAMIN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->jenis_kelamin_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">PEKERJAAN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->pekerjaan_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">ALAMAT</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->alamat_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NO TELEPON</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->no_telp_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">EMAIL</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->email_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">AGAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->agama_yang_melaporkan) }}</span>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <table class="table table-striped table-sm caption-top table-light border-primary table-condensed">
                    <thead>
                        <tr>
                            <th style="width:25%">
                                <span class="small-minus1-text bold">PERISTIWA YANG DILAPORKAN</span>
                            </th>
                            <th style="width:5%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                            <th style="width:70%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="small-minus2-text">WAKTU KEJADIAN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ date("F j, Y, g:i a", strtotime($data->waktu_kejadian)) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TEMPAT KEJADIAN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tempat_kejadian) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">APA YANG TERJADI</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->apa_yang_terjadi) }}</span>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <table class="table table-striped table-sm caption-top table-light border-primary table-condensed">
                    <thead>
                        <tr>
                            <th style="width:25%">
                                <span class="small-minus1-text bold">DATA TERLAPOR</span>
                            </th>
                            <th style="width:5%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                            <th style="width:70%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->nama_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TEMPAT LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tempat_lahir_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TANGAGL LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tanggal_lahir_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">UMUR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->umur_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">JENIS KELAMIN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->jenis_kelamin_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">PEKERJAAN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->pekerjaan_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">ALAMAT</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->alamat_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NO TELEPON</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->no_telp_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">EMAIL</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->email_terlapor) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">AGAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->agama_terlapor) }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-sm caption-top table-light border-primary table-condensed">
                    <thead>
                        <tr>
                            <th style="width:25%">
                                <span class="small-minus1-text bold">DATA KORBAN</span>
                            </th>
                            <th style="width:5%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                            <th style="width:70%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->nama_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TEMPAT LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tempat_lahir_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TANGAGL LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tanggal_lahir_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">UMUR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->umur_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">JENIS KELAMIN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->jenis_kelamin_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">PEKERJAAN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->pekerjaan_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">ALAMAT</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->alamat_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NO TELEPON</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->no_telp_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">EMAIL</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->email_korban) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">AGAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->agama_korban) }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="page-break"></div>

        <div class="row align-items-center">
            <div class="col-12 rounded">
                <table class="table table-striped table-sm caption-top table-light border-primary">
                    <thead>
                        <tr>
                            <th style="width:25%">
                                <span class="small-minus1-text bold">DATA SAKSI</span>
                            </th>
                            <th style="width:5%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                            <th style="width:70%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->nama_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TEMPAT LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tempat_lahir_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">TANGGAL LAHIR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->tanggal_lahir_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">UMUR</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->umur_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">JENIS KELAMIN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->jenis_kelamin_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">PEKERJAAN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->pekerjaan_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">ALAMAT</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->alamat_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">NO TELEPON</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->no_telp_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">EMAIL</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->email_saksi) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="small-minus2-text">AGAMA</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">{{ strtoupper($data->agama_saksi) }}</span>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <table class="table table-striped table-sm caption-top table-light border-primary table-condensed">
                    <thead>
                        <tr>
                            <th style="width:25%">
                                <span class="small-minus1-text bold">URAIAN KEJADIAN</span>
                            </th>
                            <th style="width:5%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                            <th style="width:70%">
                                <span class="small-minus1-text bold"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="small-minus2-text">URAIAN KEJADIAN</span>
                            </td>
                            <td>
                                <span class="small-minus2-text">:</span>
                            </td>
                            <td>
                                <textarea class="small-minus1-text" cols="100" rows="40">{{ $data->uraian_kejadian }}</textarea>
                            </td>
                        </tr>
                    </tbody>

                </table>
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
