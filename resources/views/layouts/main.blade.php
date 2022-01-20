<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Лента новостей @show</title>
    <style>
    body {
        max-width: 800px;
        min-height: 800px;
        margin: 0 auto;
        border: 1px solid gray;
        text-align: center;
    }

    ul li {
        display: inline-block;
        margin: 0 auto;
    }

    ul li+li {
        margin-left: 50px;
    }

    .footer {
        margin: 0 auto;
        text-align: center;
    }

    main {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 50px;

    }
    </style>
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