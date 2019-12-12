@extends('layout.master')

@section('content')
<div id="index">
    <div class="header-container">
        <div class="header-content">
            <div class="header-user">
                <a href="/premium-account"><button>UPGRADE</button></a>
            </div>
            <div class="header-text">
                <a href="#"><img src="{{ asset('images/logo/logo3.png') }}" alt="Cook&Eat Logo"></a>
                <h3>Your one stop solution for all your cooking needs</h3>
                <form action="/search-food" method="get">
                    <input type="text" placeholder="I want to cook..." name="search" autocomplete="off">
                </form>
                <p>OR</p>
                <a href="/search-ingredients"><button>Search by Ingredients</button></a>
            </div>
        </div>
    </div>
    <div class="featured-recipes-container">
        <div class="featured-recipes-content">
            <h2>Featured Recipes</h2>
            <div class="featured-recipe-flex-container">
                @foreach ($featureds as $featured)
                <div class="featured-recipe-flex">
                    <a href="/recipe-details/{{ $featured->id }}">
                        <img src="{{ $featured->image }}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="browse-container">
        <h2>Browse</h2>
        <div class="list-container">
            <h3>Find recipes by food type</h3>
            <div class="list-flex-container">
            @foreach ($foodTypes as $foodType)
                <div class="list-flex">
                    <a href="/recipes-type">
                        <img src="{{ $foodType->image }}" alt="{{ $foodType->name }}">
                        <p>{{ $foodType->name }}</p>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
        <div class="list-container list-container-bottom">
            <h3>Find recipes by cuisine</h3>
            <div class="list-flex-container">
            @foreach ($cuisines as $cuisine)
                <div class="list-flex">
                    <a href="/recipes-type">
                        <img src="{{ $cuisine->image }}" alt="{{ $cuisine->name }}">
                        <p>{{ $cuisine->name }}</p>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection