@extends('layout.master')

@section('content')
<div id="recipe-details">
    <div class="recipe-details-header" style="background-image: url({{ $food->image }})">
        <div class="recipe-details-header-content">
            <h1>{{ $food->name }}</h1>
        </div>
    </div>
    <div class="recipe-details-container">
        <div class="recipe-details-content">
            <h3>Estimated Time to Make: {{ $food->duration }} Minutes</h3>
            <p>Ingredients</p>
            <ul>
                <li>{!! $food->ingredients !!}</li>
            </ul>
            <a href="/cart/insert/{{ $food->id }}"><button>Purchase Ingredients</button></a>
            <hr>
            <p class="steps">Steps</p>
            <ol>
                <li>{!! $food->steps !!}</li>
            </ol>
        </div>
    </div>
</div>
@endsection