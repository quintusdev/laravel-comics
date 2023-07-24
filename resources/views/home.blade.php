@extends('layouts.app')

@section('content')
    <!-- CARD COMICS -->
    <div class="bg-black">
        <div class="container">
            <div class="row pos_rel">
                @foreach($comics as $id => $comic)
                    <div class="col-12 col-md-6 col-lg-2 mt-5">
                        <a href="{{ route('products.show', $id) }}">
                            <div class="card border-1 my-1">
                                <img class="img-fluid card-img-top h_img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <span>{{ $comic['title'] }}</span>
                        </a>
                    </div>
                @endforeach
                <div class="badge col-2 text-center"> CURRENT SERIES</div>
            </div>
            <div class="d-flex justify-content-center text-center align-items-center pb-4">
                <button type="button">LOAD MORE</button>
            </div>
        </div>
    </div>
@endsection
