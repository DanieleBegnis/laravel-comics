@extends('layouts.app')

@section('main-content')
    <h1 class="text-center">Ecco la Nostra Migliore Selezione di fumetti!</h1>

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
@endsection