<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buya Galung Catering</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
</head>
<body>
    @include('layouts.navbar')
    <main class="d-flex flex-nowrap">

        @yield('content')
    </main>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>