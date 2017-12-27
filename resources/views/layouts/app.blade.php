<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('partials.nav')

        <div class="container">
            <div class="row">

                @if(Auth::check())
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('category.index') }}">Categories</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('category.create') }}">Create New Category</a>
                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('post.create') }}">Create New Post</a>
                        </li>
                    </ul>
                </div>
                @endif

                <div class="col-md-8">
                    @include('partials.error')

                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
