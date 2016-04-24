<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" >
    <meta name="keywords" content="@yield('keywords')" >
    @include('includes.head')
</head>

<body>

@include('includes.header')


@yield('content')

@include('includes.footer')

@include('includes.foot')

@yield('foot')
</body>
</html>