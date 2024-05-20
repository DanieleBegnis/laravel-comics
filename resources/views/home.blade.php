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

    </main>
@endsection
