@extends('mazer_template.layouts.app')
@section('content')

<style>
    #preview_img {
        display: flex;
    }

    #preview_img img {
        width: 85px;
        height: 85px;
        border-radius: 10px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
        opacity: 85%;
        margin-right: 15px;
    }

    .rounded-input {
        border-radius: 10px;
        padding: 10px;
        border: 1px solid #cccccc;
        width: 390px;
    }

</style>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Post Berita</h3>
                {{-- <p class="text-subtitle text-muted">For user to check they list</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Post Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h4 class="card-title mb-3">Masukkan Judul Berita</h4>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-plus-circle-dotted"></i></label>
                            <input type="text" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>

                    <div class="mb-3">
                        <h4 class="card-title">Upload Image Berita</h4>
                        <div id="preview_img"></div>
                        <br>
                        <input type="file" multiple onchange="previewMultiple(event)" id="lampiran_foto" name="lampiran_foto[]" accept=".jpg,.png,.jpeg" hidden>
                        <span onclick="open_lampiran_foto()" id="button_upload" class="btn btn-outline-primary mb-2"><i class="bi bi-upload"></i> Pilih Gambar...</span>
                        <span onclick="resetFileImg(event)" class="btn btn-outline-warning mb-2"> Reset Gambar</span>
                        <br>
                        <small>Agar tidak gagal upload, masukkan gambar dengan ukuran tidak lebihdari 1MB didalam format jpg/png/jpeg.</small>
                    </div>

                    <div class="mb-3">
                        <h4 class="card-title mb-3">Tulis Berita</h4>
                        <div class="form-group">
                            <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                        </div>
                        <div class="rounded-input">
                            <small>Untuk mempermudah, gunkan fitur templates pada editor.</small>
                            <br>
                            <img src="{{ '/assets/images/bg/templateCkEditor.png' }}" alt="" style="border-radius: 10px;">
                        </div>
                    </div>

                </div>

            </form>
        </div>

    </section>
</div>

<!-- script agar ketika tag span diklik maka yg keluar adalah input file (yg terhidden) -->
<!-- script ini digunakan di tombol upload di user -->
<script>
    function open_lampiran_foto() {
        document.getElementById('lampiran_foto').click();
    }

    function open_lampiran_dokumen() {
        document.getElementById('lampiran_dokumen').click();
    }

</script>

{{-- preview img --}}
<script>
    function previewMultiple(event) {
        var saida = document.getElementById("lampiran_foto");
        var quantos = saida.files.length;
        var filePath = saida.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

        // max input file hanya 3
        if (quantos > 3) {
            alert("File IMG max 3")
            return; // jika ada lebih dari 3 jgn lanjut ke baris kode yg bawah
        }

        // validation file
        if (!allowedExtensions.exec(filePath)) {
            alert('Jenis file yang dibolehkan hanya jpg/jpeg/png.');
            return;
        }


        for (i = 0; i < quantos; i++) {
            var urls = URL.createObjectURL(event.target.files[i]);
            document.getElementById("preview_img").innerHTML += '<img src="' + urls + '">';

            // name 
            var name = saida.files.item(i).name;
            alert("File yang anda tambahkan: " + name);
        }

    }

</script>

{{-- reset input image --}}
<script>
    function resetFileImg(event) {
        // clear file input
        const file =
            document.getElementById("lampiran_foto");
        file.value = null;

        // clear preview
        var saida = document.getElementById("lampiran_foto");
        document.getElementById("preview_img").innerHTML = "";
    }

</script>


@endsection
