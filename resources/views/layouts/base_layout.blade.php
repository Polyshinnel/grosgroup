<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/js/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/js/splide/splide.min.css">
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <link rel="canonical" href="@yield('canonical')">
    <meta name="title" property="title" content="@yield('page_title')">
    <meta name="description" property="description" content="@yield('description')">
    <meta name="og:type" property="og:type" content="website">
    <meta name="og:title" property="og:title" content="@yield('page_title')">
    <meta name="og:description" property="og:description" content="@yield('description')">

    <title>@yield('page_title')</title>
</head>
<body>
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
    @include('components.menu')
    @include('components.recall-form')
    <script src="/assets/js/axios.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
