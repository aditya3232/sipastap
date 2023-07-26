<script>
    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

</script>

<script>
    $(document).ready(function () {
        $('.select2').select2();
    });

</script>

<script>
    $(document).ready(function () {

        var urlPath = window.location.pathname;
        var segments = urlPath.split('/');
        var role_id = segments[segments.length - 1];

        $(".select2-permissions").select2({
            ajax: {
                url: "{{ route('admin.roles.select2permissions', '') }}" + '/' + role_id,
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        _token: CSRF_TOKEN,
                        search: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });

</script>

<script>
    $(document).ready(function () {
        $(".select2-role").select2({
            ajax: {
                url: "{{ route('admin.users.select2roles') }}",
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        _token: CSRF_TOKEN,
                        search: params.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });

</script>
