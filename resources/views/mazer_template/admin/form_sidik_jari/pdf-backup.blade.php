<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        body {
            /* background-image: url('../../../assets/images/logo/polantas.png'); */
            background-size: 60% auto;
            background-position: center;
            background-repeat: no-repeat;
            filter: grayscale(100%);
            /* font-weight: bold; */
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
            margin: 10;
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

        .large-text-2 {
            font-size: 14pt;
        }

        .large-text-3 {
            font-size: 16pt;
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

        .arial {
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>

    <div class="container">
        <div class="row align-items-start text-center mb-4 mt-4">
            <div class="col-2">

            </div>
            <div class="col-8">
                <H6 class="large-text-3 arial">FORMULIR PENDAFTARAN SIDIK JARI</H6>
            </div>
            <div class="col-2">

            </div>
        </div>
        <div class="row align-items-left">
            <div class="col-12">
                <table class="table table-borderless">
                    <tr>
                        <td class="medium-text arial">
                            1.
                        </td>
                        <td class="medium-text arial">
                            Nama :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">

                        </td>
                        <td class="medium-text arial">
                            Nama Kecil / Alias :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->nama_keci_alias }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            2.
                        </td>
                        <td class="medium-text arial">
                            Tanggal Lahir :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->tanggal_lahir }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">

                        </td>
                        <td class="medium-text arial">
                            Tempat Lahir :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->tempat_lahir }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            3.
                        </td>
                        <td class="medium-text arial">
                            Kebangsaan :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->kebangsaan }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            4.
                        </td>
                        <td class="medium-text arial">
                            Agama :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->agama }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            5.
                        </td>
                        <td class="medium-text arial">
                            Alamat Terakhir :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->alamat_saat_ini }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            6.
                        </td>
                        <td class="medium-text arial">
                            NIK :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->nik }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            7.
                        </td>
                        <td class="medium-text arial">
                            No. Paspor :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->no_paspor }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            8.
                        </td>
                        <td class="medium-text arial">
                            Nama Ayah / Alamat Ayah :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->nama_ayah }} @if($data->alamat_ayah), @endif{{ $data->alamat_ayah }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            8.
                        </td>
                        <td class="medium-text arial">
                            Nama Ibu / Alamat Ibu :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->nama_ibu }} @if($data->alamat_ibu), @endif{{ $data->alamat_ibu }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            9.
                        </td>
                        <td class="medium-text arial">
                            Nama Istri / Nama Suami :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->nama_istri }} @if($data->alamat_suami), @endif{{ $data->alamat_suami }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            10.
                        </td>
                        <td class="medium-text arial">
                            Nama Anak :
                        </td>
                        <td class="medium-text arial">
                            {{ $data->nama_anak }}
                        </td>
                    </tr>
                    <tr>
                        <td class="medium-text arial">
                            11.
                        </td>
                        <td class="medium-text arial">
                            Tanda Tangan Cap Jempol :
                        </td>
                        <td class="medium-text arial">
                            .................................................................................
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <br>
        <br>
        <div class="row align-items-end mt-4">
            <div class="col-4">

            </div>
            <div class="col-5">

            </div>
            <div class="col">
                <p class="medium-text arial">Pemohon</p>
                <br>
                <p class="medium-text arial">..................</p>
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
        var windowTitle = "Pendaftaran_sidik_jari_nik:_" + nik + ".pdf";
        document.title = windowTitle;
        window.print();
    };

</script>
