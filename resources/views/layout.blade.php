<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<header class="d-flex flex-wrap align-items-center justify-content-center py-3 mb-4 border-bottom">

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="recipes" class="nav-link px-2 link-dark">Recipes</a></li>
{{--        <li><a href="ingredients" class="nav-link px-2 link-dark">Ingredients</a></li>--}}
        <li><a href="about" class="nav-link px-2 link-dark">About</a></li>
    </ul>

{{--    <div class="col-md-3 text-end">--}}
{{--        <button type="button" class="btn btn-outline-primary me-2">Login</button>--}}
{{--        <button type="button" class="btn btn-primary">Sign-up</button>--}}
{{--    </div>--}}
</header>

<body>
    <div class="container">
        @yield('main_content')
    </div>

</body>
</html>
