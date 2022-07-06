<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap Style --}}
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    {{-- End Bootstrap Style --}}
    <link rel="stylesheet" href="/css/style.css">
    <link href="/plugins/bootstraptemplate/dashboard.css" rel="stylesheet">
    @yield('title')
</head>

<body>

    @yield('navbar')

    <div class="container-fluid">
        <div class="row">
            @yield('sidebar')

            @yield('content')
        </div>
    </div>

    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="/plugins/feathericon/feather.min.js"></script>

    @yield('scripts')
</body>

</html>
