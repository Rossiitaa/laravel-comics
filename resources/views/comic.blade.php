@extends('layout.app')
@section('content')

<main>

        <div class="cont-jumb">
            <img src="../assets/images/jumbotron.jpg" alt="">
        </div>

        <div class="text-white py-5 container">
            <div class="row">
                @foreach ($comics as $comic)
                <div class="comic-container col-6 col-md-3 col-lg-2">
                    <img src="{{ $comic->image }}" alt="$comic->title">
                    <h6 class="pt-2">{{ $comic->title }}</h6>
                </div>
                @endforeach
            </div>
        </div>

        <div class=" cont-button d-flex justify-content-center pb-4 pt-3">
            <a class="button-load-more" href="#">Load more</a>
        </div>

    <div class="cont-shop">
        <div class="bg_shopDC">
            <div class="container shopDC p-5 text-white">
                <div>
                    <img src="../assets/images/buy-comics-digital-comics.png" alt="">
                    <span class="px-3">DIGITAL COMICS</span> 
                </div>
                <div>
                    <img src="../assets/images/buy-comics-merchandise.png" alt="">
                    <span class="px-3">DC MERCHANDISE</span>
                </div>
                <div>
                    <img src="../assets/images/buy-comics-shop-locator.png" alt="">
                    <span class="px-3">COMIC SHOP LOCATOR</span>
                </div>
                <div>
                    <img src="../assets/images/buy-comics-subscriptions.png" alt="">
                    <span class="px-3">SUBSCRIPTIONS</span>
                </div>
                <div>
                    <img src="../assets/images/buy-dc-power-visa.svg" alt="">
                    <span class="px-3">DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection