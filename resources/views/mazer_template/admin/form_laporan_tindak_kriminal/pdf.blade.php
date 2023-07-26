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
            font-size: 12pt;
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

        .underline-text {
            text-decoration: underline;
        }

    </style>

    <?php
        // Assuming $data->created_at contains a timestamp in the format "Y-m-d H:i:s" (e.g., "2023-07-20 12:34:56")
        $created_at_timestamp = $data->created_at;

        // Convert the timestamp to the day of the week as a number (1 for Monday, 2 for Tuesday, etc.)
        $dayOfWeekNumber = date("N", strtotime($created_at_timestamp));

        // Define an array to map the day of the week number to the Indonesian day name
        $daysInIndonesian = array(
            1 => 'Senin',
            2 => 'Selasa',
            3 => 'Rabu',
            4 => 'Kamis',
            5 => 'Jumat',
            6 => 'Sabtu',
            7 => 'Minggu'
        );

        // Get the Indonesian day name based on the day of the week number
        $dayInIndonesian = $daysInIndonesian[$dayOfWeekNumber];

        // Output the day of the week in Indonesian
        // echo $dayInIndonesian;
    ?>

    <div class="container">
        <div class="row align-items-start text-center mb-4 mt-4">
            <div class="col-12">
                <img src="/assets/images/logo/polri_logo.png" alt="" style=" width: 60px; height: auto;">
                <P class="large-text-3 arial bold">
                    KEPOLISIAN NEGARA REPUBLIK INDONESIA
                    DAERAH MALUKU UTARA
                    RESOR KOTA TIDORE
                </P>
                <small class="underline-text">Jl. Raya Ahmad Yani No.1 Soasio- 97813</small>
                <br>
                <small class="bold">" PRO JUSTITA "</small>
                <br>
                <br>
                <p class="underline-text">
                    SURAT TANDA PENERIMAAN LAPORAN
                    <br>
                    <small>No. Pol : STPL / / / / SPKT</small>
                </p>
                <br>
                <p>
                    .....................Yang bertanda tangan dibawah ini saya :.....................
                </p>
                <p class="bold">
                    .....................FAJERI S. :.....................
                </p>
            </div>
        </div>
        <div class="row align-items-left">
            <div class="col-12">
                <p class="large-text">
                    AIPDA Nrp 82080566 Jabatan Kanit 2 SPKT Polres Kota Tidore, pada Kantor kepolisian tersebut diatas, menerangkan dengan sebenarnya bahwa
                    pada hari ini {{ $dayInIndonesian }} tanggal {{ date('d', strtotime($data->created_at)) }} pukul
                    {{ date('H:i', strtotime($data->created_at)) }} wit, telah datang
                    ke SPKT Polres Kota Tidore, seorang laki-laki/ perempuan yang mengaku:
                </p>
                <table class="ml-4" style="margin-left: 20px;">
                    <tr>
                        <td>
                            1.
                        </td>
                        <td>
                            Nama :
                        </td>
                        <td>
                            {{ $data->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.
                        </td>
                        <td>
                            Tempat, Tanggal Lahir :
                        </td>
                        <td>
                            {{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.
                        </td>
                        <td>
                            Jenis Kelamin :
                        </td>
                        <td>
                            {{ $data->jenis_kelamin }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.
                        </td>
                        <td>
                            Agama :
                        </td>
                        <td>
                            {{ $data->agama }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.
                        </td>
                        <td>
                            Kebangsaan :
                        </td>
                        <td>
                            {{ $data->kebangsaan }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.
                        </td>
                        <td>
                            Pekerjaan :
                        </td>
                        <td>
                            {{ $data->pekerjaan }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.
                        </td>
                        <td>
                            Alamat :
                        </td>
                        <td>
                            {{ $data->alamat_saat_ini }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8.
                        </td>
                        <td>
                            No. Telp :
                        </td>
                        <td>
                            {{ $data->no_telp }}
                        </td>
                    </tr>
                </table>
                <p class="mt-4">
                    Telah melaporkan tentang peristiwa tindak pidana {{ $data->tindak_kriminal }} yang di alami oleh pelapor, yang terjadi pada hari
                    ..... tanggal ..... bertempat di .................................. dengan laporan polisi Nomor: LP / / / / / SPKT / Polresta Tidore /
                    Polda Maluku Utara, tanggal .....
                </p>
                <p class="mt-4">
                    Demikian Surat Tanda Penerimaan Laporan ini dibuat untuk dapat dipergunakan seperlunya.
                </p>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <br>
        <br>
        <div class="row align-items-end text-center mt-4">
            <div class="col-4">
                <p class="mb-6">PELAPOR</p>
                <p>{{ $data->nama }}</p>
            </div>
            <div class="col-4">

            </div>
            <div class="col-4 text-center small-text">
                <p class="mb-6">
                    Tidore, 31 Mei 2023
                    <br>
                    Yang menerima laporan
                </p>
                <br>
                <br>
                <p class="mt-6 underline-text bold">
                    UYUNG FAILISA PUTRA
                    <br>
                    BRIGPOL NRP 91070180
                </p>
            </div>
        </div>
        <div class="row align-items-end text-center mt-4">
            <div class="col-4">

            </div>
            <div class="col-4 text-center small-text">
                <p class="mb-6">
                    Mengetahui
                    .a.n. KEPALA KEPOLISIAN RESOR KOTA TIDORE
                    KANIT 2 SPKT
                </p>
                <br>
                <br>
                <p class="mt-6 underline-text bold">
                    FAJERI S.
                    <br>
                    AIBDA NRP 82080566
                </p>
            </div>
            <div class="col-4">

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
        var windowTitle = "Laporan_tindak_kriminal_nik:_" + nik + ".pdf";
        document.title = windowTitle;
        window.print();
    };

</script>
