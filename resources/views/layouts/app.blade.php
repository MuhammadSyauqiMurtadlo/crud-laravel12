<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
</head>

<body>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div style="padding: 20px;">
        <h1>@yield('judul')</h1>
        <hr>

        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
            <br>
        @endif

        @yield('content')
    </div>
</body>

</html>
