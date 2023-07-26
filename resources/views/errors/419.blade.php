<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>419 Page</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
    <div class="flex items-center justify-center w-screen h-screen  bg-gradient-to-r from-indigo-600 to-blue-400">
        <div class="px-40 py-20 bg-white rounded-md shadow-xl">
            <div class="flex flex-col items-center">
                <h1 class="font-bold text-blue-600 text-9xl">419</h1>

                <h6 class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl">
                    <span class="text-red-500">Oops!</span> Page Expired
                </h6>

                <p class="mb-8 text-center text-gray-500 md:text-lg">
                    Silahkan Coba Lagi.
                </p>

                <a href="#" id="goBackLink" class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100">Kembali</a>
            </div>
        </div>
    </div>
</body>

<script>
    document.getElementById("goBackLink").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default link behavior
        window.history.back(); // Go back in history
    });

</script>


</html>
