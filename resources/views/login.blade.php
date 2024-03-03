<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'my body')</title>
</head>
<body>
    <h1 style="font-weight: bold">this is my login path</h1>
    {{--here is the body--}}
    @yield('content')
</body>
</html>