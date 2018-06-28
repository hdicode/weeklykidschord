<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Webtools Weekly KIDS Chord</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/all.css">
</head>
<body class="webtools">
    <header>
        <div class="containerheader">
        @yield('back_button')
        <h1 class="header-title">@yield('title')</h1>
        </div>
    </header>
    @yield('container')
    <footer>
        <div>&copy; Webtools Weekly KIDS Chord. Powered by Hdicode. All rights reserved. 2018</div>
    </footer>

    <script src="/js/all.js"></script>
</body>
</html>