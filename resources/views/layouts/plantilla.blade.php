<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    </nav>
    <header>
        <div class="container text-center">
            <div class="row m-2">
                <div class="col">
                    @auth
                        <button class="btn btn-outline-primary"><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></button>
                    @else
                    <button class="btn btn-outline-primary"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></button>
            
                    @if (Route::has('register'))
                        <button class="btn btn-outline-primary"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button>
                    @endif
                    @endauth
                </div>
            </div>

            <div class="row" style="text-align: center;margin-top: 40px;">
                <div class="text-right m-3">
                    <select class="form-select p-3" name="language" style="width: 10%;">
                        <option value="en" {{ Session::get('language') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="es" {{ Session::get('language') == 'es' ? 'selected' : '' }}>Spanish</option>
                        <option value="ca" {{ Session::get('language') == 'ca' ? 'selected' : '' }}>Catalán</option>
                        <option value="eu" {{ Session::get('language') == 'eu' ? 'selected' : '' }}>Euskera</option>
                        <option value="gl" {{ Session::get('language') == 'gl' ? 'selected' : '' }}>Gallego</option>
                    </select>
                </div>
            </div>
        
                <script type="text/javascript">
                $(document).ready(function() {
                    $('select[name=language]').change(function() {
                        var lang = $(this).val();
                        window.location.href = "{{ route('changeLanguage') }}?language="+lang;
                    });
                });
            </script>
            </div>
        </header>

        </div>
    @yield('content')
</body>
</html>