<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Weekly KIDS Chord</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/overlay.css">
</head>
<body>
    <header>
        <div id="hamburger" class="hamburger" onclick="openNav(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="header-title">@yield('title')</div>
        <div class="header-search"><i class="fa fa-search"></i></div>
    </header>
    @yield('container')
    <footer>&copy; Weekly KIDS Chord. Powered by Hdicode. All rights reserved. 2018</footer>

    <script src="js/all.js"></script>
</body>
</html>