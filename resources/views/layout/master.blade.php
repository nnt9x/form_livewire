<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="navbar bg-primary text-primary-content">
        <button class="btn btn-ghost text-xl">D04K15</button>
    </div>
    <div class="p-10">
        @yield('content')
    </div>
</body>
</html>
