@extends('layouts.app')

@section('main-content')
    <main>
        <div class="jumbotron">
            <div class="container">
                <div class="box box-relative p-2 fs-6 font-weight-bold">CURRENT SERIE</div>
            </div>
        </div>
        <section class="card-list container py-5">
            @foreach ($comics as $comic)
                <div class="comic-card">
                    <div class="comic-image">
                        <img src="{{ $comic['thumb'] }}">
                    </div>

                    <p class="py-2">{{ $comic['title'] }}</p>
                </div>
            @endforeach
        </section>
        <div class="py-3 d-flex justify-content-center">
            <div class="box p-3 fs-6 font-weight-bold">LOAD MORE</div>
        </div>
        <div class="main-links-container d-flex">
            <div class="container d-flex ">
                <div class="row">
                    <div class="col-12 d-flex align-items-center" >
                        <ul class="d-flex py-5">
                            <li class="px-3 d-flex align-items-center fs-6"">
                                <img class="mx-3" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                                <a class="px-6" href="#">DIGITAL COMICS</a>
                            </li>
                            <li class="px-3 d-flex align-items-center fs-6"">
                                <img class="mx-3" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                                <a class="px-6" href="#">DC MERCHANDISE</a>
                            </li>
                            <li class="px-3 d-flex align-items-center fs-6"">
                                <img class="mx-3" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                                <a class="px-6" href="#">SUBSCRIPTION</a>
                            </li>
                            <li class="px-3 d-flex align-items-center fs-6"">
                                <img class="mx-3" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                                <a class="px-6" href="#">COMIC SHOP LOCATOR</a>
                            </li>
                            <li class="px-3 d-flex align-items-center fs-6"">
                                <img class="mx-3" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                                <a class="px-6" href="#">DC POWER VISA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
