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
    <section id="comics-cards-section" class="py-5">
        <div class="container">
            <div class="row py-5">
                @foreach ($comics as $comic)
                    <div class="col-2 card shadow-none border-0">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}} thumb">
                        <h5 class="text-white">{{$comic['title']}}</h5>
                        <a href="{{ route('layouts.comics_info', ["id" =>  $loop->index] ) }}">more...</a>
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

@section('comic-info-section')
    <section id="comic-info-section">
        <div class="section-head container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <img src="{{$comic_data["thumb"]}}" alt="{{$comic_data["title"]}}" class="shadow-lg rounded">
                </div>
            </div>
        </div>
        <div class="section-body container-fluid py-5">
            <div class="row">
                <div class="col-5 offset-2">
                    <h2 class="mb-3">{{ strtoupper($comic_data["title"]) }}</h2>
                    <div class="purchase-banner d-flex justify-content-between text-white mb-3">
                        <div class="d-flex flex-grow-1 justify-content-between p-3">
                            <div>
                                U.S. Price: {{$comic_data["price"]}}
                            </div>
                            <div>
                                AVAIABLE
                            </div>
                        </div>
                        <div class="dropdown p-3 border-left">
                            Check Availability
                        </div>
                    </div>
                    <p>{{$comic_data["description"]}}</p>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center">
                    <h6 class="text-right"> ADVERTISEMENT </h6>
                    <img src="{{ asset('/images/adv.jpg') }}" alt="advertisement">
                </div>
            </div>
        </div>
        <div class="container-fluid section-specs py-3 pb-5">
            <div class="row">
                <div class="col-4 offset-2">
                    <table>
                        <thead>
                            <tr><th> Talent </th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td nowrap>Art by:</td>
                                <td>
                                    <span>
                                        @foreach ($comic_data["artists"] as $artist)
                                            {{$artist}}
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td nowrap>Written by:</td>
                                <td>
                                    <span>
                                        @foreach ($comic_data["writers"] as $writer)
                                            {{$writer}}
                                        @endforeach
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <table>
                        <thead>
                            <tr><th> Specs </th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td nowrap>Series:</td>
                                <td>
                                    <span> {{ strtoupper($comic_data["type"]) }} </span>
                                </td>
                            </tr>
                            <tr>
                                <td nowrap>US Price:</td>
                                <td>
                                   {{$comic_data["price"]}}
                                </td>
                            </tr>
                            <tr>
                                <td nowrap>On sale date:</td>
                                <td>
                                   {{$comic_data["sale_date"]}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('icons-nav')
<nav class="icons-nav d-flex align-items-center justify-content-center px-5 py-3 shadow">
    <ul class="list-unstyled h-100 d-flex align-items-center justify-content-center flex-wrap gap-3 my-0">
        <li>
            <img src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="buy-comics-digital-comics">
            <h3> DIGITAL COMICS </h3>
        </li>
        <li>
            <img src="{{ asset('/images/buy-comics-merchandise.png') }}" alt="buy-comics-merchandise">
            <h3> DC MERCHANDISE </h3>
        </li>
        <li>
            <img src="{{ asset('/images/buy-comics-subscriptions.png') }}" alt="buy-comics-subscriptions">
            <h3> SUBSCRIPTION </h3>
        </li>
        <li>
            <img src="{{ asset('/images/buy-comics-shop-locator.png') }}" alt="">
            <h3> COMIC SHOP LOCATOR </h3>
        </li>
        <li>
            <img src="{{ asset('/images/buy-dc-power-visa.svg') }}" alt="">
            <h3> DC POWER VISA </h3>
        </li>
    </ul>
</nav>
@endsection
