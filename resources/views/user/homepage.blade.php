@extends('layouts.user')

@section('page-title', 'Homepage')

@section('home-active', 'active')

@section('content')

<section class="welcome-section" >
    <div class="flex-item">
        <div class="greet-one">
            <h3><br>Welcome to</h3>
                <h1>PUP Taguig <br>Alumni Portal!</h1>
                {{-- <b>{{$data->username}}</b> --}}
                <p><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <br>
                <a href="#news" class="btn btn-primary">Read More</a>
          </div>
    </div>
    <div class="flex-item">
        <div id="carouselExampleSampleSlides" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('img/pup-bg.png') }}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('img/pupBG2.jpg') }}" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('img/pupBG.jpg') }}" class="d-block" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-section mb-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
                <img src="{{ asset('img/sample1.jpg') }}" class="d-block w-100" alt="...">
                <div class="card">
                    <div class="card-header">Overknights Tournament</div>
                    <div class="card-body">
                        <p class="card-text">Some representative placeholder content for the first slide.For more updates for new and events, visit our PUPT official Facebook page.</p>
                        <a href="#" class="btn btn-primary">PUPT Facebook Page</a>
                    </div>
                </div>
             </div>

            <div class="carousel-item">
                <img src="{{ asset('img/sample2.jpg') }}" class="d-block w-100" alt="...">
                <div class="card">
                    <div class="card-header">2021 Year-End</div>
                    <div class="card-body">
                        <p class="card-text">Check out the new Alumni Portal Facebook page. Also, give  us a follow and like!</p>
                        <a href="#" class="btn btn-primary">Alumni Portal Facebook Page</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/sample3.jpg') }}" class="d-block w-100" alt="...">
                <div class="card">
                    <div class="card-header">Overknights Tournament</div>
                    <div class="card-body">
                        <p class="card-text">For more information. Click here.</p>
                        <a href="#" class="btn btn-primary">CSC Facebook Page</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/sample4.jpg') }}" class="d-block w-100" alt="...">
                <div class="card">
                    <div class="card-header">Pen Down, Voice Up!</div>
                    <div class="card-body">
                        <p class="card-text">For more information. Click here.</p>
                        <a href="#" class="btn btn-primary">Computer Society Facebook Page</a>
                    </div>
                    </div>
                </div>
          </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>
</section>

@endsection
