<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo" class="text-center">
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
                    </div>
                    <div class="navbar-nav container navbar-light">
                        <ul class="list-unstyled d-flex justify-content-between text-uppercase mb-0">
                            
                        </ul>
                    </div>
                </div>
                <div class="col-12">

                </div>
            </div>
        </div>
    </header>
    

</body>

</html>