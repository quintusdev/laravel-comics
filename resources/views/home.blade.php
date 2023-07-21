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
            <!-- JUMBOTRON -->
            <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
            <!-- CARD COMICS -->
            <div class="bg-black">
                <div class="container">
                    <div class="row pos_rel">
                        @foreach($comics as $comic)
                            <div class="col-12 col-md-6 col-lg-2 mt-5">
                                <div class="card border-1 my-1">
                                    <img class="img-fluid card-img-top h_img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                </div>
                                <span>{{ $comic['title'] }}</span>
                            </div>
                        @endforeach
                        <div class="badge col-2 text-center"> CURRENT SERIES</div>
                    </div>
                    <div class="d-flex justify-content-center text-center align-items-center my-4 pb-4">
                        <button type="button">LOAD MORE</button>
                    </div>
                </div>
            </div>
            <div class="bg-icons">
                <div class="container">
                    <div class="row">
                        <div class="col-12 px-2 py-2">
                            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                            <span>DIGITAL COMICS</span>

                            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                            <span>DC MERCHANDISE</span>

                            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                            <span>SUBSCRIPTION</span>

                            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                            <span>COMIC SHOP LOCATOR</span>

                            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.png') }}" alt="">
                            <span>DC POWER VISA</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>

</html>