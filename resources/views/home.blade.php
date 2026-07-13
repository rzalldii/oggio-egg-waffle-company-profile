@extends('layouts.app')

@section('title', 'Oggio Egg Waffle | Surabaya')
@section('meta_description', 'Oggio Egg Waffle — kedai kopi 100% Arabica dan Hong Kong egg waffle di Jl. Siwalankerto No. 128A, Surabaya. Kopi X Waffle mulai Rp10.000. Halal Indonesia. Order online sekarang!')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.menu-highlight')
    @include('partials.menu-full')
    @include('partials.promo-paket')
    @include('partials.gallery')
    @include('partials.testimonial')
    @include('partials.location')
@endsection