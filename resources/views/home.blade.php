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
<div class="cont">
    <div class="container">
        <div class="row">
            <div class="flex d-flex">
                <ul>
                    <li><h4>DC COMICS</h4></li>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                    <li><h4>SHOP</h4></li>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                </ul>
                <ul>
                    <li><h4>DC</h4></li>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshops</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul>
                    <li><h4>SITES</h4></li>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <button>SIGN-UP NOW!</button>
                <div class="icone">
                    <h5>FOLLOW US</h5>
                    <a href="#"><img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="facebook"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="twitter"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="youtube"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="pinterest"></a>
                    <a href="#"><img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="periscope"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
