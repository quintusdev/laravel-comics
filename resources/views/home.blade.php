@extends('layouts.app')

@section('content')
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
        <div class="d-flex justify-content-center text-center align-items-center pb-4">
            <button type="button">LOAD MORE</button>
        </div>
    </div>
</div>
<div class="bg-icons">
    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-around align-items-center py-4 mx-5">
                <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>

                <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>

                <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>

                <img class="locator" src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                <span>COMIC SHOP LOCATOR</span>

                <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.png') }}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</div>
@endsection
