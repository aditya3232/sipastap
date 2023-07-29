<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - @yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/simple-datatables/style.css">

    {{-- new datatable --}}
    <link rel="stylesheet" href="/assets/css/bootstrap.min.csss">
    <link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        body {
            position: relative;
            min-height: 100vh;
            margin: 0;
            padding-bottom: 60px;
            /* Adjust this value to match the height of your footer */
        }

        .content {
            padding-bottom: 60px;
            /* Adjust this value to match the height of your footer */
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            /* Adjust this value to match the width of your sidebar */
            height: 100vh;
            background-color: #f1f1f1;
            z-index: 100;
            /* Ensure the sidebar appears above other elements */
        }

        .footer {
            position: fixed;
            left: 50%;
            /* Position the footer to the center horizontally */
            transform: translateX(-40%);
            /* Center the footer using negative margin */
            bottom: 0;
            width: 80%;
            /* Set the width of the footer to 80% of the viewport */
            height: 55px;
            /* Adjust this value to set the height of your footer */
            z-index: 10;
            /* Ensure the footer appears above the sidebar */
            background-color: #f1f1f1;
            /* Set your desired background color */
            text-align: center;
            /* Align the content inside the footer */
            padding-top: 15px;
            /* Add padding to center the content vertically */
        }

    </style>

</head>

<body>
    <div id="app">


        @include('mazer_template.layouts.sidebar')

        <div id="main">
            @include('mazer_template.layouts.header')

            {{-- @include('sweetalert::alert') --}}
            @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

            @yield('content')

            {{-- @include('mazer_template.layouts.footer') --}}
        </div>
    </div>

    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>

    {{-- new datatable --}}
    {{-- <script src="/assets/js/jquery-3.5.1.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="/assets/vendors/simple-datatables/simple-datatables.js"></script> --}}

    {{-- script datatable mending dibkin 1 file --}}
    @include('mazer_template.layouts.script-datatable')


    {{-- ck editor --}}
    <script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

    </script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> --}}

    <script src="/assets/js/main.js"></script>

    <script>
        $(document).ready(function () {
            // Function to update the time every second
            function updateTime() {
                var now = new Date();

                // Format the date and time using JavaScript
                var options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: 'numeric',
                    minute: 'numeric',
                    second: 'numeric',
                    hour12: true
                };
                var formattedTime = now.toLocaleString('en-US', options);

                // Update the time element
                $('#current-time').text(formattedTime);
            }

            // Call updateTime immediately to display the initial time
            updateTime();

            // Call updateTime every second (1000 milliseconds)
            setInterval(updateTime, 1000);
        });

    </script>

    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @include('mazer_template.layouts.select2')
</body>

</html>
