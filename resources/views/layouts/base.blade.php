<!DOCTYPE html>

<!--ベースレイアウト-->

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <h1>@yield('title')</h1>
    <h1>@yield('title')</h1>
    <h1>@yield('title')</h1>
    <h1>@yield('title')</h1>
    <h1>@yield('title')</h1>
    <h1>@yield('title')</h1>

    <h2>メニュー</h2>
    <div>
    <h1>@yield('akira')</h1>
    </div>
    
    <div>
    <h1>@yield('footer')</h1>
    </div>

    
    <h1>@yield('menubar')</h1>

    @yield('content')
</body>


</html>
