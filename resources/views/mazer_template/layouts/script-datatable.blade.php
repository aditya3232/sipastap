<script>
    $(document).ready(function () {
        $('#table1').DataTable();
    });

</script>

<script>
    // Simple Datatable
    let table1 = document.querySelector('#permissions');
    let dataTable = new DataTable(table1, {
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('admin.permissions.datatable') }}",
            dataType: "json",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}"
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Do something here
                console.log(Error);
            }
        },
        columns: [{
                data: null,
                "sortable": false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: "name"
            },
            {
                data: "options",
                "sortable": false,
            }
        ],
        order: [
            [1, 'desc']
        ]
    });

</script>

<script>
    $(document).ready(function () {
        $('#roles').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.roles.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "name"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [0, 'desc']
            ]

        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#users').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.users.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "name"
                },
                {
                    data: "username",
                    sortable: false,
                },
                {
                    data: "email"
                },
                {
                    data: "role"
                },
                {
                    data: "options",
                    sortable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        if (row.authId === row.id) {
                            return "";
                        } else {
                            return data;
                        }
                    }
                }
            ],
            order: [
                [3, 'desc']
            ]

        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#form_sidik_jari').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.formsidikjari.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama"
                },
                {
                    data: "nik"
                },
                {
                    data: "alamat_saat_ini"
                },
                {
                    data: "no_telp"
                },
                {
                    data: "email"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [5, 'desc'] // Id column (index 5) in descending order
            ]

        });
    });

</script>

<script>
    $(document).ready(function () {
        $('#form_sim').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.formsim.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama"
                },
                {
                    data: "nik"
                },
                {
                    data: "alamat_saat_ini"
                },
                {
                    data: "no_telp"
                },
                {
                    data: "email"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [5, 'desc']
            ]

        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#form_laporanKehilangan').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.formlaporankehilangan.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama"
                },
                {
                    data: "nik"
                },
                {
                    data: "alamat_saat_ini"
                },
                {
                    data: "no_telp"
                },
                {
                    data: "email"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [5, 'desc']
            ]

        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#form_laporanTindakKriminal').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.formlaporantindakkriminal.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama"
                },
                {
                    data: "nik"
                },
                {
                    data: "alamat_saat_ini"
                },
                {
                    data: "no_telp"
                },
                {
                    data: "email"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [5, 'desc']
            ]

        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#form_laporanPengaduanMasyarakat').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.formlaporanpengaduanmasyarakat.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama_yang_melaporkan"
                },
                {
                    data: "nik_yang_melaporkan"
                },
                {
                    data: "alamat_yang_melaporkan"
                },
                {
                    data: "no_telp_yang_melaporkan"
                },
                {
                    data: "email_yang_melaporkan"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [5, 'desc']
            ]

        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#form_skck').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.formskck.datatable') }}",
                dataType: "json",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    // Do something here
                    console.log(Error);
                }
            },
            columns: [{
                    data: null,
                    "sortable": false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama"
                },
                {
                    data: "nik"
                },
                {
                    data: "alamat_sekarang"
                },
                {
                    data: "no_telp"
                },
                {
                    data: "keperluan"
                },
                {
                    data: "options",
                    "sortable": false,
                }
            ],
            order: [
                [5, 'desc']
            ]

        });
    });

</script>
