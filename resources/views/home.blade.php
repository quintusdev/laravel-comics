<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- LINK FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

        <title>Laravel</title>

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>

    <body>
        @include('partials.header')
        <main>
            <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
            <div class="bg-black">
                <div class="container">
                    <div class="row">
                        @foreach($comics as $comic)
                            <div class="col-12 col-md-6 col-lg-2 my-3">
                                <div class="card border-1 my-1">
                                    <img class="img-fluid card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                    <div class="card-body">
                                        <span>{{ $comic['title'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>

    </body>

</html>