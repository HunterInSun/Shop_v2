@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    {{-- Pannel code --}}
    <div id="carouselExampleCaptions" class="carousel slide">
        {{-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div> --}}
        <div class="carousel-inner">
            @foreach ($sliders as $key => $item)
                <div class="carousel-item {{$key == '0' ? 'active':''}}">
                    @if ($item->image)
                        <img src="{{ asset("$item->image") }}" class="d-block w-100" alt="..." style="max-height: 680px;">
                    @endif
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $item->title }}</h5>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
