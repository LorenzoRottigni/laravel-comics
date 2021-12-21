@extends('layouts.index')



@section('header')
    <header>
        <nav class="container-fluid h-100 d-flex px-5 py-3">
                <div class="img-container flex-shrink-0 d-flex align-items-center"><img src="{{ asset('/images/dc-logo.png') }}" alt="logo"></div>
                <div class="flex-grow-1 d-flex align-items-center justify-content-end">
                    <ul class="list-unstyled d-none d-lg-flex my-0 px-2 justify-content-end">
                        <li class="px-3">CHARACTERS</li>
                        <li class="px-3">COMICS</li>
                        <li class="px-3">MOVIES</li>
                        <li class="px-3">TV</li>
                        <li class="px-3">GAMES</li>
                        <li class="px-3 active">COLLECTIBLES</li>
                        <li class="px-3">VIDEOS</li>
                        <li class="px-3">FANS</li>
                        <li class="px-3">NEWS</li>
                        <li class="px-3">SHOP</li>
                    </ul>
                </div>
                <div class="pos-f-t d-flex align-items-center d-lg-none">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-dark p-4">
                        <h4 class="text-white">Collapsed content</h4>
                        <span class="text-muted">Toggleable via the navbar brand.</span>
                        </div>
                    </div>
                    <nav class="navbar navbar-dark bg-primary rounded">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
        </nav>
        
    </header>
@endsection



@section('jumbotron')
    <section id="jumbotron" >
        
    </section>

@endsection

@section('cards-section')
    <section id="comics-cards-section">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}} thumb">
                        <h4>{{$comic['series']}}</h4>
                        <!--<div class="card-footer d-flex justify-content-between">
                            <h5>{{$comic['type']}}</h5>
                            <h6>{{$comic['price']}}</h6>
                        </div>-->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection