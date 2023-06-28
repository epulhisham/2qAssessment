<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2qCompanies</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        .pagination .page-item .page-link {
        color: #343a40;
        }

        .pagination .page-item.active .page-link {
        background-color: #343a40;
        border-color: #343a40;
        color: #fff;
        }
    </style>

</head>
<body>


<header>
    @include('layouts.navbar')
</header>
<main>
    @yield('container')
</main>

<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    feather.replace()
</script>

</body>
</html>


