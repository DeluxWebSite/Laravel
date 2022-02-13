<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')@show</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="/resources/css/style.css">
</head>

<body>
    <header class="">
        @include('blocks.menu')
    </header>
    <main class="">
        @yield('content')
    </main>
    <footer class="">
        <div class="text-center">
            <small class="copyright">
                &copy; 2020-2022 Copyright
                <i class="fa fa-heart"></i>
            </small>
        </div>
    </footer>
</body>

</html>