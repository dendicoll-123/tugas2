<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://tse1.mm.bing.net/th?id=OIP.ts9IX9TzpAhQWCH_mldDVgHaEK&pid=Api&P=0&h=220" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('Partials.header')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('Partials.footer')
</body>
</html>
