<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Page title --}}
    <title>@lang('locale.title')</title>

    {{-- Website icon --}}
    <link rel="icon" href="{{ asset('img/unnamed.jpg') }}" type="image/x-icon">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/apk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/background.css') }}">
    <link rel="stylesheet" href="{{ asset('css/filter-button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backtotop.css') }}">

    {{-- JavaScript --}}
    <script src="{{ asset('js/filters-button.js') }}"></script>
    <script src="{{ asset('js/backtotop.js') }}"></script>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Additional CSS --}}
    <style>
        .background-layer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('img/unnamed.jpg') center center fixed;
            background-size: 50%;
            filter: blur(5px);
            z-index: -1;
        }

        .blur-background .row p {
            font-size: 125%;
        }

        .flag-image {
            width: 20px;
            /* Sesuaikan lebar gambar sesuai kebutuhan */
            height: auto;
            /* Tinggi gambar menyesuaikan proporsi aslinya */
        }

        audio {
            display: none;
        }
    </style>
</head>

<body>
    <!-- app.blade.php -->
    @yield('content-app')
</body>

<script>
    // Mengambil elemen paragraf dengan ID "copyright"
    var copyright = document.getElementById("copyright");

    // Mengambil tahun saat ini secara dinamis
    var currentYear = new Date().getFullYear();

    // Menambahkan teks ke elemen paragraf
    copyright.innerHTML = '©Copyrights ' + currentYear + ' by <a style="text-decoration: none;" href="{{ route('index') }}">Arvandhaa</a>';
</script>

</html>
