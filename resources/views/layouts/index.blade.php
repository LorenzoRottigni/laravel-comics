<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials._head')
    <title>DC Comics</title>
</head>
<body>
    @yield('header')
    <main>
        @yield('jumbotron')
        @if(!$info)
            @yield('cards-section')
        @else
            @yield('comic-info-section')
        @endif

        @yield('icons-nav')
    </main>

</body>
</html>
