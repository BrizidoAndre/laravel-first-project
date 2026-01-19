<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
    <title>Home page</title>
</head>
<body data-bs-theme="dark">
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">{{$heading}}</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <x-link url="/" :active="request()->is('/')">
                            Home
                        </x-link>
                    </li>
                    <li class="nav-item">
                        <x-link url="/about" :active="request()->is('about')">About</x-link>
                    </li>
                    <li class="nav-item">
                        <x-link url="/contact" :active="request()->is('contact')">Contact</x-link>
                    </li>
                    <li class="nav-item">
                        <x-link url="/jobs" :active="request()->is('jobs')">Jobs</x-link>
                    </li>
                    <li class="nav-item">
                        <x-link url="/button" type="button">Button</x-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container">
    {{ $slot }}
</main>
</body>
</html>
