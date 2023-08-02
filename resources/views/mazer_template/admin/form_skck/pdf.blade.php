<!DOCTYPE html>
<html>

<head>
    <title>Dokumen Permohonan SKCK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('../../../assets/images/samples/sampul-skck-body.jpg');
        background-size: 100%;
        /* Use 100% to avoid scaling the image */
        background-repeat: repeat-x;
        background-position: center;
        filter: grayscale(100%);
        font-weight: bold;
    }

    /* Exclude the background image on the first page */
    body.first-page {
        background-image: none;
    }

    .font1 {
        font-size: 21px;
        font-family: "Cambria", serif;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .font2 {
        margin-top: 6.8pt;
        margin-right: 83.5pt;
        margin-bottom: .0001pt;
        margin-left: 68.2pt;
        text-align: center;
        font-size: 24px;
        font-family: "Arial", sans-serif;
    }

    .font3 {
        margin: 0cm;
        font-size: 19px;
        font-family: "Arial", sans-serif;
        font-weight: bold;
        margin-top: 13.9pt;
        margin-right: 0cm;
        margin-bottom: .0001pt;
        margin-left: 32.95pt;
    }

    .fonthalaman {
        margin: 0cm;
        font-size: 15px;
        font-family: "Arial MT", sans-serif;
        margin-top: 3.85pt;
        margin-right: 14.4pt;
        margin-bottom: .0001pt;
        margin-left: 0cm;
        text-align: center;
    }

    .font4 {
        margin: 0cm;
        font-size: 15px;
        font-family: "Arial MT", sans-serif;
        margin-left: 17.2pt;
    }

    .tabel {
        border: none;
        margin-left: 7.6pt;
        border-collapse: collapse;
    }

    .labelkecil {
        margin-top: 2.85pt;
        margin-right: 5.15pt;
        margin-bottom: .0001pt;
        margin-left: 8.9pt;
        font-size: 15px;
        font-family: "Arial MT", sans-serif;
        text-align: center;
    }

    .font5 {
        margin-top: 2.85pt;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 6.2pt;
        font-size: 15px;
        font-family: "Arial MT", sans-serif;
    }

    .font6 {
        font-size: 16px;
        font-family: "Arial", sans-serif;
    }

    .page-break {
        height: 0;
        page-break-before: always;
        background-image: inherit;
        /* Inherit the background image from the body */
        background-size: 100%;
        /* Use 100% to avoid scaling the image */
        background-repeat: repeat;
        background-position: center;
        filter: grayscale(100%);
        font-weight: bold;
    }

</style>

<body class="first-page">
    <div style="text-align: center;"><br></div>
    <p><strong><span class="font1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; NOMOR SKCK :.</span></strong><span style="font-size:19px;color:#4D4D4D;">. . . . . . . . . . . . . . . . . . . .
            . . . . . .</span></p>
    <p><br></p>
    <img src="/assets/images/samples/sampul-skck.jpg" alt="" style=" width: 700px; height: auto;" class="center">
    {{-- <img src="/assets/images/samples/sampul-skck.png" alt="" style=" width: 60px; height: auto;"> --}}
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <h1 class="font2"><span style="color:#4D4D4D;">DAFTAR PERTANYAAN</span></h1>
    <div style="text-align: center;"><strong><span class="font2">SURAT KETERANGAN CATATAN KEPOLISIAN</span></strong></div>
    <p><br></p>
    <p><br></p>
    @foreach($skck_daftar_diris as $data)
        <p class="font3"><span style="color:#4D4D4D;">NAMA&nbsp;PEMOHON&nbsp;&nbsp;: {{ $data->skck_daftar_diris_nama }}</span></p>
    @endforeach
    <p><br></p>
    @foreach($skck_daftar_diris as $data)
        <p class="font3"><span style="color:#4D4D4D;">KEPERLUAN&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: {{ $data->skck_daftar_diris_keperluan }}</span></p>
    @endforeach
    <p><span style='font-size:15px;font-family:"Arial MT",sans-serif;'><br>&nbsp;</span></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
</body>

<body>
    <div class="page-break"></div>
    <p class="fonthalaman">1</p>
    <p><br></p>
    <p class="font4"><strong><span class="font6">Yang bertanda tangan dibawah ini :</span></strong></p>
    <p class="font4"><strong><em><span class="font6">The undersigned is:</span></em></strong></p>
    <table class="tabel">
        <tbody>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">a.</span></p>
                </td>
                <td colspan="2" style="width: 58.35pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">N a m a</span></u></p>
                    <p style='margin-top:5.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">N a m e</span></em></p>
                </td>
                <td style="width: 79.55pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;line-height:13.4pt;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.4pt;'><span style="font-size:16px;">
                                {{ $data->skck_daftar_diris_nama }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">b.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Tempat&nbsp;/Tanggal&nbsp;lahir</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Place&nbsp;/&nbsp;Date&nbsp;of&nbsp;Birth</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_tempat_lahir }} /
                                {{ $data->skck_daftar_diris_tanggal_lahir }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">c.</span></p>
                </td>
                <td colspan="2" style="width: 58.35pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">A&nbsp;g&nbsp;a&nbsp;m a</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Religion</span></em></p>
                </td>
                <td style="width: 79.55pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_agama }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">d.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Kebangsaan</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Nationality</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_kebangsaan }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">e.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Jenis&nbsp;Kelamin</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Male&nbsp;/&nbsp;Female</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_jenis_kelamin }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">f.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Kawin&nbsp;/&nbsp;Tidak&nbsp;kawin</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span
                                class="font6">Married&nbsp;/&nbsp;not&nbsp;married</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_status_kawin }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">g.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Pekerjaan</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Occupation</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_pekerjaan }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">h.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Alamat sekarang</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Current address</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_alamat_sekarang }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">i.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Nomor&nbsp;Kartu&nbsp;Penduduk</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Citizend&nbsp;card&nbsp;number</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_nik }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 33.65pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">j.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 33.65pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Nomor pasport&nbsp;</span></u><em><u><span class="font6">Pasport</span></u></em><em><span class="font6">&nbsp;</span></em><em><span class="font6">number</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 33.65pt;vertical-align: top;">
                    <p style='margin-top:2.9pt;margin-right:  0cm;margin-bottom:.0001pt;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 33.65pt;vertical-align: top;">
                    <p style='margin-top:2.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_no_passport }}</span>
                    </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">k.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">No.&nbsp;KITAS/&nbsp;KITAB</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span
                                class="font6">Limited&nbsp;Stay&nbsp;Permit&nbsp;No</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_no_kitas }}</span>
                        @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p class="labelkecil"><span style="font-size:16px;">l.</span></p>
                </td>
                <td colspan="3" style="width: 137.9pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p class="font5"><u><span style="font-size:16px;">Nomor&nbsp;Telp.&nbsp;/&nbsp;Hp</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Phone&nbsp;number</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_no_telp }}</span>
                    </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td colspan="6" style="width: 541.25pt;padding: 0cm;height: 53.45pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:23.4pt;margin-bottom:.0001pt;margin-left:10.0pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Menerangkan hal-hal sebagai jawaban / keterangan
                                atas pertanyaan-pertanyaan diajukan sebagai berikut <em>:</em></span></strong></p>
                    <p style='margin-top:6.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:10.0pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><em><span
                                    class="font6">Explain&nbsp;things&nbsp;as&nbsp;answer&nbsp;/&nbsp;explanation&nbsp;to&nbsp;the&nbsp;questions&nbsp;posed&nbsp;as&nbsp;follows&nbsp;:</span></em></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:  5.25pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><strong><span class="font6">I.</span></strong></p>
                </td>
                <td colspan="5" style="width: 514.9pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                class="font6">Hubungan&nbsp;Kekeluargaan&nbsp;(<em>Kinship&nbsp;Relations</em>)&nbsp;:</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 22.95pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.2pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">1.</span></strong></p>
                </td>
                <td colspan="4" style="width: 491.95pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Istri /&nbsp;Suami (<em>My
                                    Wife&nbsp;/&nbsp;My&nbsp;Husband</em>)&nbsp;:</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 22.95pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 35.4pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">a.</span></p>
                </td>
                <td style="width: 79.55pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">N&nbsp;a m a</span></u></p>
                    <p style='margin-top:5.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">N&nbsp;a m&nbsp;e</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:  0cm;margin-bottom:.0001pt;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_nama_pasangan }}</span>
                    </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 22.95pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 35.4pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">b.</span></p>
                </td>
                <td style="width: 79.55pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">U&nbsp;m&nbsp;u&nbsp;r</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">A&nbsp;g&nbsp;e</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_umur_pasangan }}</span>
                    </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.35pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 22.95pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 35.4pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">c.</span></p>
                </td>
                <td style="width: 79.55pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">A&nbsp;g&nbsp;a&nbsp;m a</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:.65pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:12.8pt;'><em><span class="font6">Religion</span></em></p>
                </td>
                <td style="width: 14.95pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:.85pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td style="width: 362.05pt;padding: 0cm;height: 36.3pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_agama_pasangan }}</span>
                    </p>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
    <p><span style='font-size:16px;font-family:"Arial MT",sans-serif;'><br>&nbsp;</span></p>
    <div class="page-break"></div>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.7pt;margin-right:16.1pt;margin-bottom:.0001pt;margin-left:0cm;text-align:center;'>2</p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.7pt;margin-right:16.1pt;margin-bottom:.0001pt;margin-left:0cm;text-align:center;'><br></p>
    <table style="border: none;margin-left:30.15pt;border-collapse:collapse;">
        <tbody>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 30.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 30.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.4pt;'><span style="font-size:16px;">d.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 30.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.35pt;'><u><span style="font-size:16px;">Kebangsaan</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Nationality</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 30.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:.6pt;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;line-height:13.4pt;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 30.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.4pt;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_kebangsaan_pasangan }}</span>
                    </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">e.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Pekerjaan</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Occupation</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <span style="font-size:16px;">{{ $data->skck_daftar_diris_pekerjaan_pasangan }}</span>
                    </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">f.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Alamat</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Address</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_alamat_pasangan }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:6.45pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><strong><span class="font6">2.</span></strong></p>
                </td>
                <td colspan="4" style="width: 179.45pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Bapak Sendiri <em>(Father)&nbsp;</em>:</span></strong></p>
                </td>
                <td style="width: 50.35pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 98.95pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 163.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">a.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">N&nbsp;a m a</span></u></p>
                    <p style='margin-top:5.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">N&nbsp;a m&nbsp;e</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:  .6pt;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 39.5pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_nama_bapak }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">b.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">U&nbsp;m&nbsp;u&nbsp;r</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">A&nbsp;g&nbsp;e</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_umur_bapak }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">c.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">A&nbsp;g&nbsp;a&nbsp;m a</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Religion</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_agama_bapak }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">d.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Kebangsaan</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Nationality</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_kebangsaan_bapak }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">e.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Pekerjaan</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Occupation</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_pekerjaan_bapak }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">f.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Alamat</span></u><u><span
                                style="font-size:16px;">&nbsp;</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Address</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_alamat_bapak }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:6.45pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><strong><span class="font6">3.</span></strong></p>
                </td>
                <td colspan="3" style="width: 130.05pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Ibu Sendiri <em>(Mother)&nbsp;</em>:</span></strong></p>
                </td>
                <td style="width: 49.4pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 50.35pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 98.95pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 163.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">a.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">N&nbsp;a m a</span></u></p>
                    <p style='margin-top:5.85pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">N&nbsp;a m&nbsp;e</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:  .6pt;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_nama_ibu }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">b.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">U&nbsp;m&nbsp;u&nbsp;r</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">A&nbsp;g&nbsp;e</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_umur_ibu }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">c.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">A&nbsp;g&nbsp;a&nbsp;m a</span></u></p>
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><em><span class="font6">Religion</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_agama_ibu }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">d.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Kebangsaan</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Nationality</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_kebangsaan_ibu }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">e.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Pekerjaan</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Occupation</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_pekerjaan_ibu }}</span>
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">f.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Alamat</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><span class="font6">Address</span></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:.6pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">:</span></p>
                </td>
                <td colspan="4" style="width: 362.45pt;padding: 0cm;height: 33.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.3pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_alamat_ibu }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:6.45pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><strong><span class="font6">4.</span></strong></p>
                </td>
                <td colspan="5" style="width: 229.8pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Saudara Kandung/Tiri <em>(Siblings)</em></span></strong>
                    </p>
                </td>
                <td style="width: 98.95pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 163.75pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 26.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 30.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">No.</span></p>
                </td>
                <td style="width: 85.7pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">Nama&nbsp;</span></u><em><u><span
                                    class="font6">(Name)</span></u></em></p>
                </td>
                <td style="width: 13.65pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 49.4pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 50.35pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.4pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><u><span style="font-size:16px;">Umur</span></u></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.4pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.75pt;'><em><u><span class="font6">(Age)</span></u></em></p>
                </td>
                <td style="width: 98.95pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.75pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:3.0pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><u><span
                                style="font-size:16px;">Pekerjaan&nbsp;</span></u><em><u><span class="font6">(Job)</span></u></em></p>
                </td>
                <td style="width: 163.75pt;padding: 0cm;height: 33.55pt;vertical-align: top;">
                    <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><u><span style="font-size:16px;">Alamat&nbsp;</span></u><em><u><span
                                    class="font6">(Address)</span></u></em></p>
                </td>
            </tr>
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
                        <td style="width: 26.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 30.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">a.</span></p>
                        </td>

                        <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_nama[$i] }}</span></p>
                        </td>
                        <td style="width: 50.35pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  4.3pt;margin-bottom:.0001pt;margin-left:5.5pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_umur[$i] }}</span></p>
                        </td>
                        <td style="width: 98.95pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}</span></p>
                        </td>
                        <td style="width: 163.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</span></p>
                        </td>
                    </tr>
                @elseif($i == 1)
                    <tr>
                        <td style="width: 26.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 30.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">b.</span></p>
                        </td>

                        <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_nama[$i] }}</span></p>
                        </td>
                        <td style="width: 50.35pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  4.3pt;margin-bottom:.0001pt;margin-left:5.5pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_umur[$i] }}</span></p>
                        </td>
                        <td style="width: 98.95pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}</span></p>
                        </td>
                        <td style="width: 163.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</span></p>
                        </td>
                    </tr>
                @elseif($i == 2)
                    <tr>
                        <td style="width: 26.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 30.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">c.</span></p>
                        </td>

                        <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_nama[$i] }}</span></p>
                        </td>
                        <td style="width: 50.35pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  4.3pt;margin-bottom:.0001pt;margin-left:5.5pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_umur[$i] }}</span></p>
                        </td>
                        <td style="width: 98.95pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}</span></p>
                        </td>
                        <td style="width: 163.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</span></p>
                        </td>
                    </tr>
                @elseif($i == 3)
                    <tr>
                        <td style="width: 26.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 30.7pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">d.</span></p>
                        </td>

                        <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_nama[$i] }}</span></p>
                        </td>
                        <td style="width: 50.35pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  4.3pt;margin-bottom:.0001pt;margin-left:5.5pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_umur[$i] }}</span></p>
                        </td>
                        <td style="width: 98.95pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_pekerjaan[$i] }}</span></p>
                        </td>
                        <td style="width: 163.75pt;padding: 0cm;height: 19.85pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_daftar_saudara_kandungs_alamat[$i] }}</span></p>
                        </td>
                    </tr>
                @endif
            @endfor
            {{-- show below, only the form is left, for example form d. because the previous user only filled out 3 forms --}}
            @if(count($skck_daftar_saudara_kandungs_nama) < 4)
                @for($i = count($skck_daftar_saudara_kandungs_nama); $i < 4; $i++)
                    @if($i == 0)
                        <tr>
                            <td style="width: 26.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 30.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">a.</span></p>
                            </td>
                            <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                        style="font-size:16px;">.........................................</span></p>
                            </td>
                            <td style="width: 50.35pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:  5.2pt;margin-bottom:.0001pt;margin-left:4.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">...........</span>
                                </p>
                            </td>
                            <td style="width: 98.95pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">..........................</span></p>
                            </td>
                            <td style="width: 163.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                        style="font-size:16px;">............................................</span>
                                </p>
                            </td>
                        </tr>
                    @elseif($i == 1)
                        <tr>
                            <td style="width: 26.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 30.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">b.</span></p>
                            </td>
                            <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                        style="font-size:16px;">.........................................</span></p>
                            </td>
                            <td style="width: 50.35pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:  5.2pt;margin-bottom:.0001pt;margin-left:4.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">...........</span>
                                </p>
                            </td>
                            <td style="width: 98.95pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">..........................</span></p>
                            </td>
                            <td style="width: 163.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                        style="font-size:16px;">............................................</span>
                                </p>
                            </td>
                        </tr>
                    @elseif($i == 2)
                        <tr>
                            <td style="width: 26.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 30.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">c.</span></p>
                            </td>
                            <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                        style="font-size:16px;">.........................................</span></p>
                            </td>
                            <td style="width: 50.35pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:  5.2pt;margin-bottom:.0001pt;margin-left:4.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">...........</span>
                                </p>
                            </td>
                            <td style="width: 98.95pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">..........................</span></p>
                            </td>
                            <td style="width: 163.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                                <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                        style="font-size:16px;">............................................</span>
                                </p>
                            </td>
                        </tr>
                    @elseif($i == 3)
                        <td style="width: 26.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                            </p>
                        </td>
                        <td style="width: 30.7pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                            <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">d.</span></p>
                        </td>
                        <td colspan="3" style="width: 148.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                            <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.35pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">.........................................</span>
                            </p>
                        </td>
                        <td style="width: 50.35pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                            <p style='margin-top:2.8pt;margin-right:  5.2pt;margin-bottom:.0001pt;margin-left:4.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">...........</span>
                            </p>
                        </td>
                        <td style="width: 98.95pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                            <p style='margin-top:2.8pt;margin-right:  5.4pt;margin-bottom:.0001pt;margin-left:4.7pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">..........................</span></p>
                        </td>
                        <td style="width: 163.75pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                            <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:5.95pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">............................................</span>
                            </p>
                        </td>
                        </tr>
                    @endif
                @endfor
            @endif
        </tbody>
    </table>
    <p><br></p>
    <p><br></p>
    <div class="page-break"></div>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.8pt;margin-right:14.15pt;margin-bottom:.0001pt;margin-left:0cm;text-align:center;'>3</p>
    <table class="tabel">
        <tbody>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 16.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 16.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.4pt;'><strong><span class="font6">5.</span></strong></p>
                </td>
                <td colspan="3" style="width: 370.9pt;padding: 0cm;height: 16.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.4pt;'><strong><span class="font6">Riwayat Sekolah
                                <em>(School&nbsp;History)</em></span></strong></p>
                </td>
                <td style="width: 121.35pt;padding: 0cm;height: 16.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
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
                        <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">a.</span></p>
                        </td>
                        <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}</span></p>
                        </td>
                        <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                        </td>
                        <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</span>
                            </p>
                        </td>
                    </tr>
                @elseif($i == 1)
                    <tr>
                        <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">b.</span></p>
                        </td>
                        <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}</span></p>
                        </td>
                        <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                        </td>
                        <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</span>
                            </p>
                        </td>
                    </tr>
                @elseif($i == 2)
                    <tr>
                        <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">c.</span></p>
                        </td>
                        <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}</span></p>
                        </td>
                        <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                        </td>
                        <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</span>
                            </p>
                        </td>
                    </tr>
                @elseif($i == 3)
                    <tr>
                        <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">d.</span></p>
                        </td>
                        <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}</span></p>
                        </td>
                        <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                        </td>
                        <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</span>
                            </p>
                        </td>
                    </tr>
                @elseif($i == 4)
                    <tr>
                        <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                        </td>
                        <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">e.</span></p>
                        </td>
                        <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}</span></p>
                        </td>
                        <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                    style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                        </td>
                        <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                            <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                    style="font-size:16px;">{{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</span>
                            </p>
                        </td>
                    </tr>
                @endif
            @endfor
            {{-- show below, only the form is left, for example form d. because the previous user only filled out 3 forms --}}
            @if(count($skck_riwayat_sekolahs_nama_pendidikan) < 5)
                @for($i = count($skck_riwayat_sekolahs_nama_pendidikan); $i < 5; $i++)
                    @if($i == 0)
                        <tr>
                            <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">a.</span></p>
                            </td>
                            <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                        style="font-size:16px;">.......................................</span></p>
                            </td>
                            <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                            </td>
                            <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">...............................</span></p>
                            </td>
                        </tr>
                    @elseif($i == 1)
                        <tr>
                            <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">b.</span></p>
                            </td>
                            <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                        style="font-size:16px;">.......................................</span></p>
                            </td>
                            <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                            </td>
                            <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">...............................</span></p>
                            </td>
                        </tr>
                    @elseif($i == 2)
                        <tr>
                            <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">c.</span></p>
                            </td>
                            <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                        style="font-size:16px;">.......................................</span></p>
                            </td>
                            <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                            </td>
                            <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">...............................</span></p>
                            </td>
                        </tr>
                    @elseif($i == 3)
                        <tr>
                            <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">d.</span></p>
                            </td>
                            <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                        style="font-size:16px;">.......................................</span></p>
                            </td>
                            <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                            </td>
                            <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">...............................</span></p>
                            </td>
                        </tr>
                    @elseif($i == 4)
                        <tr>
                            <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span>
                                </p>
                            </td>
                            <td style="width: 26.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">e.</span></p>
                            </td>
                            <td style="width: 146.1pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:6.35pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'><span
                                        style="font-size:16px;">.......................................</span></p>
                            </td>
                            <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.75pt;margin-right:  5.6pt;margin-bottom:.0001pt;margin-left:5.6pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span
                                        style="font-size:16px;">Tahun&nbsp;Lulus&nbsp;(</span><em><span class="font6">Year of&nbsp;Graduation</span></em><span style="font-size:16px;">) :</span></p>
                            </td>
                            <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                                <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:6.45pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">...............................</span></p>
                            </td>
                        </tr>
                    @endif
                @endfor
            @endif


            <tr>
                <td style="width: 28pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:  3.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><strong><span class="font6">II.</span></strong></p>
                </td>
                <td colspan="5" style="width: 513.5pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Tersangkut perkara Pidana dan Pelanggaran (
                                <em>Criminal
                                    case Lodged and Abuse&nbsp;</em>)</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 19.7pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 19.7pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">1.</span></strong></p>
                </td>
                <td colspan="3" style="width: 370.9pt;padding: 0cm;height: 19.7pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Perkara Pidana <em>( Criminal Case
                                    )&nbsp;</em>:</span></strong></p>
                </td>
                <td style="width: 121.35pt;padding: 0cm;height: 19.7pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 53.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 53.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 53.4pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">a.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 53.4pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:45.5pt;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Apakah Saudara pernah tersangkut perkara
                                pidana
                                /&nbsp;</span><em><span class="font6">Have you ever caught a criminal case&nbsp;</span></em><span style="font-size:16px;">?</span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_apakah_pernah_tersangkut_perkara_pidana }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">b.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Dalam perkara apa /&nbsp;</span><em><span
                                    class="font6">In&nbsp;any&nbsp;case</span></em><span style="font-size:16px;">?</span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_dalam_perkara_pidana_apa }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  8.65pt;margin-bottom:.0001pt;margin-left:4.95pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">c.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Bagaimana putusannya dan Vonis hakim
                                /&nbsp;</span><em><span class="font6">How to judge the decision and verdict&nbsp;</span></em><span style="font-size:16px;">?</span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_bagaimana_putusan_hakim }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">d.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 39.6pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Apakah Saudara sedang dalam proses perkara
                                pidana ?
                                Kasus apa ? / <em>Are You currently in the process of a criminal case ? What kind of case ?</em></span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_apakah_sedang_dalam_proses_pidana }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">e.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Sampai sejauh mana proses hukumnya
                                /&nbsp;</span><em><span class="font6">To&nbsp;what&nbsp;extent&nbsp;is&nbsp;the&nbsp;legal&nbsp;process</span></em><span style="font-size:16px;">?</span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_sejauh_mana_proses_hukum_pidananya }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">2.</span></strong></p>
                </td>
                <td colspan="2" style="width: 172.5pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span class="font6">Pelanggaran <em>(Violation)</em></span></strong>
                    </p>
                </td>
                <td style="width: 198.4pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 121.35pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 53.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 53.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 53.35pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">a.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 53.35pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:98%;'><span style="font-size:16px;line-height:98%;">Apakah Saudara
                                pernah
                                melakukan pelanggaran hukum dan atau norma-norma sosial lainnya /&nbsp;</span><em><span style='font-size:16px;line-height:98%;font-family:"Arial",sans-serif;'>Have you ever violated the law and social
                                    norms or
                                    other&nbsp;</span></em><span style="font-size:16px;line-height:98%;">?</span></p>
                        <p style='margin-top:6.2pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_apakah_pernah_tersangkut_perkara_pelanggaran }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 59.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 59.35pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 59.35pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  8.6pt;margin-bottom:.0001pt;margin-left:5.65pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">b.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 59.35pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:17.55pt;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:142%;'><span style="font-size:16px;line-height:142%;">Pelanggaran
                                hukum atau norma-norma sosial apa /&nbsp;</span><em><span style='font-size:16px;line-height:142%;font-family:"Arial",sans-serif;'>Violations of the laws or social norms of what&nbsp;</span></em><span
                                style="font-size:16px;line-height:142%;">?</span></p>
                        <p style='margin-top:.25pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_dalam_perkara_pelanggaran_apa }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 26.4pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  8.65pt;margin-bottom:.0001pt;margin-left:4.95pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">c.</span></p>
                </td>
                <td colspan="3" style="width: 465.85pt;padding: 0cm;height: 39.65pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Sampai sejauh mana prosesnya
                                /&nbsp;</span><em><span class="font6">To what extent is the process&nbsp;</span></em><span style="font-size:16px;">?</span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:9.7pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_sejauh_mana_proses_hukum_pelanggarannya }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 19.7pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:  3.6pt;margin-bottom:.0001pt;margin-left:9.0pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><strong><span class="font6">III.</span></strong></p>
                </td>
                <td colspan="4" style="width: 392.15pt;padding: 0cm;height: 19.7pt;vertical-align: top;">
                    <p style='margin-top:2.8pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                class="font6">INFORMASI&nbsp;LAIN&nbsp;(&nbsp;OTHER&nbsp;INFORMASION&nbsp;)</span></strong></p>
                </td>
                <td style="width: 121.35pt;padding: 0cm;height: 19.7pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 73.2pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 73.2pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">1.</span></p>
                </td>
                <td colspan="4" style="width: 492.25pt;padding: 0cm;height: 73.2pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Riwayat Pekerjaan / negara &ndash; negara yang
                                pernah
                                dikunjungi /&nbsp;</span><em><span class="font6">Work&nbsp;experience&nbsp;and&nbsp;countries&nbsp;y</span></em><em><span class="font6">ou</span></em><em><span class="font6">&nbsp;</span></em><em><span
                                    class="font6">have ever visited before&nbsp;</span></em><span style="font-size:16px;">:&nbsp;(Sebutkan&nbsp;tahun&nbsp;berapa,&nbsp;dalam rangka&nbsp;apa&nbsp;dan</span></p>
                        <p style='margin-top:6.15pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">negara&nbsp;mana&nbsp;yang&nbsp;dikunjungi)</span>
                        </p>
                        <p style='margin-top:6.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_riwayat_pekerjaan_lain }}. {{ $data->skck_daftar_diris_negara_yg_pernah_dikunjungi }} </span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">2.</span></p>
                </td>
                <td colspan="4" style="width: 492.25pt;padding: 0cm;height: 39.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Kesenangan / Kegemaran / Hobi
                                /&nbsp;</span><em><span class="font6">Pleasure / Pastimes / Hobbies&nbsp;</span></em><span style="font-size:16px;">:</span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">{{ $data->skck_daftar_diris_hobi }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 28pt;padding: 0cm;height: 50.25pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.25pt;padding: 0cm;height: 50.25pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:4.55pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">3.</span></p>
                </td>
                <td colspan="4" style="width: 492.25pt;padding: 0cm;height: 50.25pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Alamat yang mudah dihubungi ( no telepon )
                                /&nbsp;</span><em><span class="font6">contacting&nbsp;address&nbsp;in&nbsp;case&nbsp;of&nbsp;emergency</span></em></p>
                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">(</span><em><span class="font6">phone
                                    call&nbsp;</span></em><span style="font-size:16px;">)</span></p>
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.6pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:12.8pt;'><span
                                style="font-size:16px;">{{ $data->skck_daftar_diris_no_telp_lain }}</span></p>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
    <div class="page-break"></div>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.5pt;margin-right:16.8pt;margin-bottom:.0001pt;margin-left:0cm;text-align:center;'>4</p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:3.5pt;margin-right:16.8pt;margin-bottom:.0001pt;margin-left:0cm;text-align:center;'><br></p>
    <table style="border: none;margin-left:5.55pt;border-collapse:collapse;">
        <tbody>
            <tr>
                <td style="width: 29.65pt;padding: 0cm;height: 16.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:10.0pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.4pt;'><strong><span class="font6">IV.</span></strong></p>
                </td>
                <td colspan="2" style="width: 513.8pt;padding: 0cm;height: 16.55pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:4.95pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:13.4pt;'><strong><span class="font6">Sponsor ( <em>khusus orang asing /
                                    special foreigners&nbsp;</em>)</span></strong></p>
                </td>
            </tr>
            <tr>
                <td style="width: 29.65pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.6pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  5.45pt;margin-bottom:.0001pt;margin-left:4.05pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">1.</span></p>
                </td>
                <td style="width: 492.2pt;padding: 0cm;height: 19.8pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Disponsori&nbsp;oleh&nbsp;(</span><em><span
                                    class="font6">Sponsored&nbsp;by</span></em><span style="font-size:16px;">)&nbsp;:&nbsp;{{ $data->skck_daftar_diris_disponsori_oleh }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 29.65pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.6pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  5.45pt;margin-bottom:.0001pt;margin-left:4.05pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">2.</span></p>
                </td>
                <td style="width: 492.2pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Alamat&nbsp;Sponsor&nbsp;(</span><em><span
                                    class="font6">Sponsor&nbsp;Address</span></em><span style="font-size:16px;">)&nbsp;:&nbsp;{{ $data->skck_daftar_diris_alamat_sponsor }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 29.65pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.6pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  5.45pt;margin-bottom:.0001pt;margin-left:4.05pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">3.</span></p>
                </td>
                <td style="width: 492.2pt;padding: 0cm;height: 19.75pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Telp&nbsp;/&nbsp;Fax&nbsp;(</span><em><span
                                    class="font6">Tel&nbsp;/&nbsp;Fax</span></em><span style="font-size:16px;">)&nbsp;:&nbsp;{{ $data->skck_daftar_diris_no_telp_sponsor }} / {{ $data->skck_daftar_diris_fax }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td style="width: 29.65pt;padding: 0cm;height: 22.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.6pt;padding: 0cm;height: 22.85pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:  5.45pt;margin-bottom:.0001pt;margin-left:4.05pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  center;'><span style="font-size:16px;">4.</span></p>
                </td>
                <td style="width: 492.2pt;padding: 0cm;height: 22.85pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.75pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:6.65pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">Jenis&nbsp;Usaha&nbsp;(</span><em><span
                                    class="font6">Type of Business)&nbsp;</span></em><span style="font-size:16px;">:&nbsp;{{ $data->skck_daftar_diris_jenis_usaha }}</span></p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td colspan="3" style="width: 543.45pt;padding: 0cm;height: 77.9pt;vertical-align: top;">
                    <p style='margin-top:5.8pt;margin-right:9.8pt;margin-bottom:.0001pt;margin-left:12.0pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style="font-size:16px;">Keterangan diatas saya buat
                            dengan sebenarnya atas sumpah menurut kepercayaan saya, apabila dikemudian hari ternyata keterangan ini tidak benar maka saya sanggup dituntut berdasarkan hukum yang berlaku. /&nbsp;</span><em><span
                                class="font6">I
                                made the above statement actually sworn according to
                                my&nbsp;belief,&nbsp;if&nbsp;in&nbsp;the&nbsp;future&nbsp;this&nbsp;information&nbsp;turns&nbsp;out&nbsp;true&nbsp;then&nbsp;I&nbsp;could&nbsp;not&nbsp;be&nbsp;prosecuted&nbsp;under&nbsp;applicable&nbsp;laws.</span></em>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 29.65pt;padding: 0cm;height: 59.45pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.6pt;padding: 0cm;height: 59.45pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 492.2pt;padding: 0cm;height: 59.45pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:178.85pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;Tidore......................., ...................................................</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 29.65pt;padding: 0cm;height: 75.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 21.6pt;padding: 0cm;height: 75.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
                </td>
                <td style="width: 492.2pt;padding: 0cm;height: 75.85pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:17px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:17px;font-family:"Calibri",sans-serif;'>&nbsp;</span></p>
                    <p style='margin-top:10.65pt;margin-right:  36.8pt;margin-bottom:.0001pt;margin-left:184.2pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'><span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(.................................................................)</span></p>
                    <p style='margin-top:5.9pt;margin-right:  36.55pt;margin-bottom:.0001pt;margin-left:205.35pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;line-height:12.8pt;'><span style="font-size:16px;">&nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Nama/<em>Name</em> &amp;&nbsp;</span><span style="font-size:16px;">Tanda&nbsp;Tangan/</span><em><span class="font6">Signature</span></em></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <p><br></p>
    <div class="page-break"></div>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'><span style="font-size:19px;">KARTU Tik</span></p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'><span style="font-size:12px;">&nbsp;</span></p>
    <table style="margin-left:6.05pt;border-collapse:collapse;border:none;">
        <tbody>
            <tr>
                <td colspan="5" style="width: 381.7pt;border: 1pt solid black;padding: 0cm;height: 43.3pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin: 2.85pt 293.75pt 0cm 0cm; font-size: 15px; font-family: "Arial MT", sans-serif; text-align: left;'>&nbsp;1. a. Nama &nbsp; &nbsp;: {{ $data->skck_daftar_diris_nama }}</p>
                    @endforeach
                    <p style='margin: 2.85pt 293.75pt 0cm 0cm; font-size: 15px; font-family: "Arial MT", sans-serif; text-align: left;'>&nbsp; &nbsp; &nbsp;b. Alias &nbsp; &nbsp; &nbsp; :</p>
                </td>
                <td rowspan="3" style="width: 133.8pt;border-top: 1pt solid black;border-right: 1pt solid black;border-bottom: 1pt solid black;border-image: initial;border-left: none;padding: 0cm;height: 43.3pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-top:.25pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span style='font-size:23px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
                    </p>
                    <p style='margin-top:0cm;margin-right:45.85pt;margin-bottom:.0001pt;margin-left:46.25pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:center;'>PHOTO</p>
                </td>
            </tr>
            <tr>
                <td colspan="5" style="width: 381.7pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 43.3pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;2. Kebangsaan : {{ $data->skck_daftar_diris_kebangsaan }}</p>
                    @endforeach
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp; &nbsp;a. No. KTP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
                            {{ $data->skck_daftar_diris_nik }}</p>
                    @endforeach
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>b. No. Pasport &nbsp; &nbsp; : {{ $data->skck_daftar_diris_no_passport }}</p>
                    @endforeach
                    <p style='margin-top:6.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="5" style="width: 381.7pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 20.1pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:3.6pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;3. A g a m a &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;
                            &nbsp; &nbsp;: {{ $data->skck_daftar_diris_agama }}</p>
                    @endforeach
                    <p style='margin-top:3.6pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="width: 515.5pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 43.25pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin: 2.85pt 371.35pt 0cm 0cm; font-size: 15px; font-family: "Arial MT", sans-serif; text-align: left;'>. 4. a. Tgl.Lahir/Umur &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->skck_daftar_diris_tanggal_lahir }} /
                            {{ $data->skck_daftar_diris_umur }}</p>
                    @endforeach
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin: 2.85pt 371.35pt 0cm 0cm; font-size: 15px; font-family: "Arial MT", sans-serif; text-align: left;'>&nbsp; &nbsp; &nbsp; b. Tempat Lahir &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
                            {{ $data->skck_daftar_diris_tempat_lahir }}</p>
                    @endforeach
                    <p style='margin-top:5.95pt;margin-right:  371.35pt;margin-bottom:.0001pt;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:  right;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 242.3pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 30.55pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;5. Alamat : {{ $data->skck_daftar_diris_alamat_sekarang }}</p>
                    @endforeach
                </td>
                <td colspan="5" style="width: 273.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 30.55pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;6. Perubahan Alamat <span style="font-size:13px;">:</span></p>
                </td>
            </tr>
            <tr>
                <td style="width: 242.3pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 68pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:6.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;7. Kedudukan dalam keluarga :
                            {{ $data->skck_daftar_diris_kedudukan_dalam_keluarga }}</p>
                    @endforeach
                </td>
                <td colspan="5" style="width: 273.2pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 68pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:6.0pt;margin-right:11.0pt;margin-bottom:.0001pt;margin-left:41.25pt;font-size:15px;font-family:"Arial MT",sans-serif;text-indent:-36.0pt;line-height:146%;'>8. a. &nbsp; &nbsp;Nama Bapak Kandung
                            &nbsp; &nbsp; &nbsp; : {{ $data->skck_daftar_diris_nama_bapak }}</p>
                    @endforeach
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:6.0pt;margin-right:11.0pt;margin-bottom:.0001pt;margin-left:41.25pt;font-size:15px;font-family:"Arial MT",sans-serif;text-indent:-36.0pt;line-height:146%;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;Nama Ibu Kandung &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->skck_daftar_diris_nama_ibu }}</p>
                    @endforeach
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:20.6pt;font-size:15px;font-family:"Arial MT",sans-serif;'>b. &nbsp; &nbsp;Alamat Bapak / Ibu Kandung :
                            Alamat Bapak: {{ $data->skck_daftar_diris_alamat_bapak }} / Alamat Ibu: {{ $data->skck_daftar_diris_alamat_ibu }}</p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td colspan="6" style="width: 515.5pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 22.75pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:4.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;9. &nbsp; Pekerjaan &nbsp; &nbsp; : {{ $data->skck_daftar_diris_pekerjaan }}
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td colspan="4" style="width: 343.05pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 87.2pt;vertical-align: top;">
                    <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        @foreach($skck_daftar_diris as $data)
                            <p>&nbsp;10. a. Nama Istri/Suami &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->skck_daftar_diris_nama_pasangan }}&nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp;Umur : {{ $data->skck_daftar_diris_umur_pasangan }} Th</p>
                        @endforeach
                        <p>&nbsp; &nbsp; &nbsp; b. Nama Bapak Istri/Suami &nbsp; &nbsp;: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Umur : &nbsp; &nbsp; &nbsp; Th</p>
                        <p>&nbsp; &nbsp; &nbsp; c. Nama Ibu Istri/Suami &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Umur : &nbsp; &nbsp;
                            &nbsp; Th</p>
                        @foreach($skck_daftar_diris as $data)
                            <p>&nbsp; &nbsp; &nbsp; d. Alamat : {{ $data->skck_daftar_diris_alamat_pasangan }}</p>
                        @endforeach
                    </div>
                </td>
                <td colspan="2" style="width: 172.45pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 87.2pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:4.4pt;margin-bottom:.0001pt;margin-left:22.4pt;font-size:15px;font-family:"Arial MT",sans-serif;text-indent:-17.2pt;'>
                        11.&nbsp;Sanak/saudara&nbsp;yang&nbsp;menjadi&nbsp;Tanggungan&nbsp;:</p>
                    @foreach($skck_saudara_yg_menjadi_tanggungans as $data)
                        <p style='margin-top:2.85pt;margin-right:4.4pt;margin-bottom:.0001pt;margin-left:22.4pt;font-size:15px;font-family:"Arial MT",sans-serif;text-indent:-17.2pt;'>{{ $data->skck_saudara_yg_menjadi_tanggungans_nama }}
                        </p>
                    @endforeach
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><strong><span
                                style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong><strong><span style='font-size:12px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong></p>
                    <p style='margin-top:.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.25pt;font-size:15px;font-family:"Arial MT",sans-serif;'>Alamat&nbsp;:</p>
                    @foreach($skck_saudara_yg_menjadi_tanggungans as $data)
                        <p style='margin-top:2.85pt;margin-right:4.4pt;margin-bottom:.0001pt;margin-left:22.4pt;font-size:15px;font-family:"Arial MT",sans-serif;text-indent:-17.2pt;'>{{ $data->skck_saudara_yg_menjadi_tanggungans_alamat }}
                        </p>
                    @endforeach
                </td>
            </tr>
            <tr>
                <td colspan="3" style="width: 281.85pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 78.2pt;vertical-align: top;">
                    <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        <p>&nbsp;12. Anak-anak : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : &nbsp; &nbsp;
                            &nbsp;</p>
                    </div>
                    <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        <ol style="margin-bottom:0cm;list-style-type: decimal;">
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
                                    <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: {{ $skck_daftar_anaks_nama[$i] }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : {{ $skck_daftar_anaks_umur[$i] }} Th</li>
                                @elseif($i == 1)
                                    <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: {{ $skck_daftar_anaks_nama[$i] }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : {{ $skck_daftar_anaks_umur[$i] }} Th</li>
                                @elseif($i == 2)
                                    <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: {{ $skck_daftar_anaks_nama[$i] }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : {{ $skck_daftar_anaks_umur[$i] }} Th</li>
                                @elseif($i == 3)
                                    <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: {{ $skck_daftar_anaks_nama[$i] }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : {{ $skck_daftar_anaks_umur[$i] }} Th</li>
                                @endif
                            @endfor
                            {{-- show below, only the form is left, for example form d. because the previous user only filled out 3 forms --}}
                            @if(count($skck_daftar_anaks_nama) < 4)
                                @for($i = count($skck_daftar_anaks_nama); $i < 4; $i++)
                                    @if($i == 0)
                                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : Th</li>
                                    @elseif($i == 1)
                                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : Th</li>
                                    @elseif($i == 2)
                                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : Th</li>
                                    @elseif($i == 3)
                                        <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : Th</li>
                                    @endif
                                @endfor
                            @endif
                        </ol>
                    </div>
                </td>
                <td colspan="3" style="width: 233.65pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 78.2pt;vertical-align: top;">
                    <p style='margin: 2.85pt 0cm 0cm 5.25pt; font-size: 15px; font-family: "Arial MT", sans-serif; line-height: 2;'>Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur :</p>
                    <p style='margin: 2.85pt 0cm 0cm 5.25pt; font-size: 15px; font-family: "Arial MT", sans-serif; line-height: 1;'><span style="line-height: 1;">4. : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : Th</span></p>
                    <p style='margin: 2.85pt 0cm 0cm 5.25pt; font-size: 15px; font-family: "Arial MT", sans-serif; line-height: 1;'><span style="line-height: 1;">5. : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : Th</span></p>
                    <p style='margin: 2.85pt 0cm 0cm 5.25pt; font-size: 15px; font-family: "Arial MT", sans-serif; line-height: 1;'><span style="line-height: 1;">6. : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Umur : Th</span></p>
                    <p style='margin-top:3.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:167.25pt;font-size:15px;font-family:"Arial MT",sans-serif;line-height:11.7pt;'><br></p>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="width: 515.5pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 50pt;vertical-align: top;">
                    <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        <p>&nbsp;13. Ciri-ciri badan :</p>
                    </div>
                    <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        <ol style="margin-bottom:0cm;list-style-type: decimal;">
                            @foreach($skck_daftar_diris as $data)
                                <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>Rambut &nbsp; &nbsp; : {{ $data->skck_daftar_diris_rambut }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;3.
                                    Kulit &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $data->skck_daftar_diris_kulit }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5.
                                    Tanda Istimewa : {{ $data->skck_daftar_diris_tanda_istimewa }}</li>
                                <li style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>Muka &nbsp; &nbsp; &nbsp; &nbsp; : {{ $data->skck_daftar_diris_muka }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp;4. Tinggi badan &nbsp; &nbsp;: {{ $data->skck_daftar_diris_tinggi_badan }}&nbsp; &nbsp; &nbsp; &nbsp;Cm</li>
                        </ol>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="width: 515.5pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 24.2pt;vertical-align: top;">
                    <div style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>
                        <p>&nbsp;14. Rumus Sidik Jari : {{ $data->skck_daftar_diris_rumus_sidik_jari }}</p>
                        @endforeach
                    </div>
                </td>
            </tr>
            <tr>
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
                <td colspan="6" style="width: 515.5pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 84.25pt;vertical-align: top;">
                    <p style='margin-top:2.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>15. Riwayat Sekolah &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tahun Lulus</p>
                    @for($i = 0; $i < count($skck_riwayat_sekolahs_nama_pendidikan); $i++)
                        @if($i == 0)
                            <p style='margin-top:3.05pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>1. {{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}&nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp; : {{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</p>
                        @elseif($i == 1)
                            <p style='margin-top:2.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>2. {{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}&nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp; : {{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</p>
                        @elseif($i == 2)
                            <p style='margin-top:2.95pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>3. {{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}&nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp; : {{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</p>
                        @elseif($i == 3)
                            <p style='margin-top:3.1pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.4pt;font-size:15px;font-family:"Arial MT",sans-serif;'>4. {{ $skck_riwayat_sekolahs_nama_pendidikan[$i] }}&nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp; : {{ $skck_riwayat_sekolahs_tahun_lulus[$i] }}</p>
                        @endif
                    @endfor
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 268.65pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 37.25pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:19.3pt;margin-bottom:.0001pt;margin-left:23.4pt;font-size:15px;font-family:"Arial MT",sans-serif;text-indent:-18.05pt;'>16. Kesenangan/Kegemaran/Hobi :
                            {{ $data->skck_daftar_diris_hobi }}</p>
                    @endforeach
                </td>
                <td colspan="4" rowspan="3" style="width: 246.85pt;border-top: none;border-left: none;border-bottom: 1pt solid black;border-right: 1pt solid black;padding: 0cm;height: 37.25pt;vertical-align: top;">
                    <p style='margin-top:2.85pt;margin-right:131.25pt;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;line-height:147%;'>Diisi menurut keadaan Tgl. &nbsp; &nbsp; &nbsp; &nbsp;:</p>
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;line-height:12.55pt;'>
                        Kepala&nbsp;Kepolisian&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 268.65pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 37.3pt;vertical-align: top;">
                    @foreach($skck_daftar_diris as $data)
                        <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;17.&nbsp;Catatan&nbsp;Kriminal&nbsp;yang&nbsp;ada&nbsp;:
                            {{ $data->skck_daftar_diris_dalam_perkara_pelanggaran_apa }}. {{ $data->skck_daftar_diris_dalam_perkara_pidana_apa }}</p>
                    @endforeach
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
                    <p style='margin-top:2.85pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 268.65pt;border-right: 1pt solid black;border-bottom: 1pt solid black;border-left: 1pt solid black;border-image: initial;border-top: none;padding: 0cm;height: 65.75pt;vertical-align: top;">
                    <p style='margin-top:5.9pt;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;18. Data/Keterangan-keterangan lain :</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'><br></p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
    <p style='margin:0cm;font-size:15px;font-family:"Arial MT",sans-serif;'>&nbsp;</p>
</body>

</html>

@foreach($skck_daftar_diris as $data)
    <script type="text/javascript">
        window.onload = function () {

            var nik = "{!! $data->skck_daftar_diris_nik !!}";
            var windowTitle = "Permohonan_skck_nik:_" + nik + ".pdf";
            document.title = windowTitle;
            window.print();
        };

    </script>
@endforeach
